<?php
$first_array = explode(" ", readline());
$second_array = explode(" ", readline());

$is_identical = true;
$sum = 0;
for ($i = 0; $i < count($first_array); $i++) {
    if ($first_array[$i] !== $second_array[$i]) {
        echo 'Arrays are not identical. Found difference at ' . $i . ' index.';
        $is_identical = false;
        break;
    } else {
        $sum += intval($first_array[$i]);
    }
}

if ($is_identical) {
    echo 'Arrays are identical. Sum: ' . $sum;
}