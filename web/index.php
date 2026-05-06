<?php
$tomorrow = new DateTime('tomorrow');
$dayOfWeek = (int) $tomorrow->format('N');
$days = ['pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota', 'neděle'];
echo "Zítra bude " . $days[$dayOfWeek - 1];
```