<?php
$operator = readline();
$first_value = intval(readline());
$second_value = intval(readline());

function calculations($operator, $x, $y) {
    if ($operator === 'add') {
        add($x, $y);
    } elseif ($operator === 'multiply') {
        multiply($x, $y);
    } elseif ($operator === 'subtract') {
        subtract($x, $y);
    } elseif ($operator === 'divide') {
        divide($x, $y);
    }
}

function add($x, $y) {
    echo $x + $y;
}

function multiply($x, $y) {
    echo $x * $y;
}

function subtract($x, $y) {
    echo $x - $y;
}

function divide($x, $y) {
    echo $x / $y;
}

calculations($operator, $first_value, $second_value);