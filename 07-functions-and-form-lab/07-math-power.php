<?php
$first_number = intval(readline());
$second_number = intval(readline());

function math_power($x, $y): int
{
    return $x ** $y;
}

echo math_power($first_number, $second_number);