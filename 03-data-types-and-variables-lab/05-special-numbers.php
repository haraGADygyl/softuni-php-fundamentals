<?php
$number = intval(readline());

$special_numbers = [5, 7, 11];

for ($i = 1; $i <= $number; $i++) {
    $num_to_str = (string) $i;

    $sum = 0;
    for ($j = 0; $j < strlen($num_to_str) ; $j++) {
        $sum += (int) $num_to_str[$j];
    }

    if (in_array($sum, $special_numbers)) {
        echo $i . ' -> True' . PHP_EOL;
    } else {
        echo $i . ' -> False' . PHP_EOL;
    }
}