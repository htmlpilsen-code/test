<?php
$verses = [
    "Míč letí vzduchem jako pták,",
    "dlaně ho vítají bez obav,",
    "smeč skáče, blok je silný zrak,",
    "síť chvěje se jak tenký mrak,",
    "volejbal – hra plná krás a dráv."
];

echo "<!DOCTYPE html>\n<html lang='cs'>\n<head>\n<meta charset='UTF-8'>\n<title>Volejbalové verše</title>\n</head>\n<body>\n";

echo "<h2>hezký nadpis pět veršů o volejbalu</h2>\n";
foreach ($verses as $line) {
    echo "<p>{$line}</p>\n";
}

echo "<h2>hezký nadpis pět veršů a volejbalu</h2>\n";
foreach ($verses as $line) {
    echo "<p>{$line}</p>\n";
}

echo "<h2>hezký nadpis 5 veršů o volejbalu</h2>\n";
foreach ($verses as $line) {
    echo "<p>{$line}</p>\n";
}

echo "<h2>hezký nadpis 5 veršů a volejbalu</h2>\n";
foreach ($verses as $line) {
    echo "<p>{$line}</p>\n";
}

echo "</body>\n</html>";
```