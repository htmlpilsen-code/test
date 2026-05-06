<?php
function removeLastLine($filename) {
    if (!file_exists($filename) || !is_readable($filename)) {
        return false;
    }
    $lines = file($filename);
    if ($lines === false || count($lines) === 0) {
        return false;
    }
    array_pop($lines);
    return file_put_contents($filename, implode('', $lines)) !== false;
}