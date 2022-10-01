<?php
$first_num = intval(readline());
$second_num = intval(readline());
$third_num = intval(readline());

function add($x, $y)
{
    return $x + $y;
}

function subtract($x, $y)
{
    return $x - $y;
}

function add_and_subtract($a, $b, $c)
{
    $sum = add($a, $b);
    return subtract($sum, $c);

}

echo add_and_subtract($first_num, $second_num, $third_num);