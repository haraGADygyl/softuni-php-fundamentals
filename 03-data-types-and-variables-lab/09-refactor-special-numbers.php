<?php
$number = intval(readline());

for ($i = 1; $i <= $number; $i++) {
    $sum = 0;
    $counter = $i;

    while ($counter > 0) {
        $sum += $counter % 10;
        $counter = $counter / 10;
    }

    $is_special = ($sum == 5) || ($sum == 7) || ($sum == 11);
    $result = $is_special ? "True" : "False";
    echo sprintf("%d -> %s", $i, $result) . PHP_EOL;
}