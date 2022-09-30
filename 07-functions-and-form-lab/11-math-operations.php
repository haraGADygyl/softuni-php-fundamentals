<?php
$first_number = floatval(readline());
$operator = readline();
$second_number = floatval(readline());

function calculator($x, $operator, $y) {
    $result = 0.0;

    switch ($operator) {
        case '+':
            $result = $x + $y;
            break;
        case '-':
            $result = $x - $y;
            break;
        case '*':
            $result = $x * $y;
            break;
        case '/':
            $result = $x / $y;
            break;
    }
    return number_format($result, 2);
}

echo calculator($first_number, $operator, $second_number);