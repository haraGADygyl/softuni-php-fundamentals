<?php
$number = intval(readline());

function check_sign($number) {
    if ($number == 0) {
        echo "The number 0 is zero.";
    } elseif ($number < 0) {
        echo "The number $number is negative.";
    } else {
        echo "The number $number is positive.";
    }
}

check_sign($number);
