<?php
$number = readline();

$number_length = strlen($number);
$sum = 0;
for ($i = 0; $i < $number_length; $i++) {
    $sum += $number % 10;
    $number = intval($number / 10);
}

echo $sum;