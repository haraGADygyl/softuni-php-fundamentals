<?php
$number = intval(readline());
$multiplier = intval(readline());

if ($multiplier > 10) {
    echo $number . ' X ' . $multiplier . ' = ' .$number * $multiplier . PHP_EOL;
}

for ($i = $multiplier; $i <= 10; $i++) {
    echo $number . ' X ' . $i . ' = ' .$number * $i . PHP_EOL;
}

echo PHP_EOL;

do {
    echo $number . ' X ' . $multiplier . ' = ' .$number * $multiplier . PHP_EOL;
    $multiplier++;
} while ($multiplier <= 10);