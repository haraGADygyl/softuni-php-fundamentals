<?php
$number = intval(readline());

$number_as_str = (string)$number;
$sum = 0;
for ($i = 0; $i < strlen($number); $i++) {
    $current_chart = $number_as_str[$i];

    $factorial = 1;
    for ($x = $current_chart; $x >= 1; $x--) {
        $factorial = $factorial * $x;
    }
    $sum += $factorial;
}

if ($sum === $number) {
    echo 'yes';
} else {
    echo 'no';
}