<?php
$number = intval(readline());

$sum = 0;
$current_number = 1;
for ($i = 0; $i < $number; $i++) {
    echo $current_number . PHP_EOL;
    $sum += $current_number;
    $current_number += 2;
}

echo 'Sum: ' . $sum;