<?php
$number = intval(readline());

$divisor = 0;
if ($number % 10 == 0) {
    $divisor = 10;
} elseif ($number % 7 == 0) {
    $divisor = 7;
} elseif ($number % 6 == 0) {
    $divisor = 6;
} elseif ($number % 3 == 0) {
    $divisor = 3;
} elseif ($number % 2 == 0) {
    $divisor = 2;
}

if ($divisor) {
    echo 'The number is divisible by ' . $divisor;
} else {
    echo 'Not divisible';
}

echo PHP_EOL;

$divisor_array = [10, 7, 6, 3, 2];

$is_found = false;
foreach ($divisor_array as $d) {
    if ($number % $d == 0) {
        echo 'The number is divisible by ' . $d;
        $is_found = true;
        break;
    }
}

if (!$is_found) {
    echo 'Not divisible';
}
