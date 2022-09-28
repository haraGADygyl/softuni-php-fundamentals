<?php

while (true) {
    $number = abs(intval(readline()));

    if ($number % 2 == 0) {
        echo 'The number is: ' . $number;
        break;
    } else {
        echo 'Please write an even number.' . PHP_EOL;
    }
}