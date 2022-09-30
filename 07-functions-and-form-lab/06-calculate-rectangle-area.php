<?php
$a = intval(readline());
$b = intval(readline());

function rectangle_area($x, $y): int
{
    return $x * $y;
}

echo rectangle_area($a, $b);