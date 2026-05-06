<?php
$date = new DateTime();
$fmt = new IntlDateFormatter(
    'cs_CZ',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'Europe/Prague',
    IntlDateFormatter::GREGORIAN,
    'EEEE'
);
echo $fmt->format($date);