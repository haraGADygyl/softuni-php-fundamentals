<?php
$number = intval(readline());

$factorial = function ($number) {
    $result = 1;
    for ($i = $number; $i > 0; $i--) {
        $result = bcmul($result, $i);
    }
    return $result;
};

echo $factorial($number);