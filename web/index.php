<?php
header('Content-Type: text/plain; charset=utf-8');
$city = $_GET['city'] ?? 'Praha';
$encodedCity = urlencode($city);
$url = "https://wttr.in/{$encodedCity}?format=j1";

$json = @file_get_contents($url);
if ($json === false) {
    echo "Nepodařilo se načíst data o počasí.\n";
    exit(1);
}

$data = json_decode($json, true);
if (json_last_error() !== JSON_ERROR_NONE || empty($data['weather']) || count($data['weather']) < 3) {
    echo "Data o počasí na zítra nejsou k dispozici.\n";
    exit(1);
}

$tomorrow = $data['weather'][2];

$date = $tomorrow['date'] ?? 'neznámé datum';
$minTemp = $tomorrow['mintempC'] ?? '?';
$maxTemp = $tomorrow['maxtempC'] ?? '?';

$condition = 'neznámý';
if (!empty($tomorrow['hourly'][0]['weatherDesc'][0]['value'])) {
    $condition = $tomorrow['hourly'][0]['weatherDesc'][0]['value'];
} elseif (!empty($tomorrow['avgtempC'])) {
    $condition = 'průměrná teplota ' . $tomorrow['avgtempC'] . '°C';
}

printf(
    "Počasí na zítra (%s) pro %s: %s, teploty %s°C až %s°C.\n",
    $date,
    htmlspecialchars($city, ENT_QUOTES, 'UTF-8'),
    $condition,
    $minTemp,
    $maxTemp
);
```