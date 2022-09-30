<?php
$number = readline();

function multiply_evens_by_odds($n) {
    $evens_sum = get_sum_of_evens($n);
    $odds_sum = get_sum_of_odds($n);

    return $evens_sum * $odds_sum;
}

function get_sum_of_evens($number) {
    $evens = [];
    foreach (str_split($number) as $item) {
        if (intval($item) % 2 == 0) {
            $evens[] = intval($item);
        }
    }
    return array_sum($evens);
}

function get_sum_of_odds($number) {
    $odds = [];
    foreach (str_split($number) as $item) {
        if (intval($item) % 2 == 1) {
            $odds[] = intval($item);
        }
    }
    return array_sum($odds);
}

echo multiply_evens_by_odds($number);