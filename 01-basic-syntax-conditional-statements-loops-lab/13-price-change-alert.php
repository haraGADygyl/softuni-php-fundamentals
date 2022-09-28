<?php
$number_of_prices = intval(readline());
$threshold = floatval(readline());
$last = floatval(readline());

for ($i = 0; $i < $number_of_prices - 1; $i++) {
    $c = floatval(readline());
    $div = ($c - $last) / $last;
    $isSignificantDifference = abs($div) >= $threshold;

    $to = "";
    if ($div == 0) {
        $to = "NO CHANGE: " . $c;
    } elseif (!$isSignificantDifference) {
        $to = sprintf("MINOR CHANGE: %f to %f (%.2f%%)", $last, $c, $div * 100);
    } elseif ($isSignificantDifference && ($div > 0)) {
        $to = sprintf("PRICE UP: %f to %f (%.2f%%)", $last, $c, $div * 100);
    } elseif ($isSignificantDifference && ($div < 0))
        $to = sprintf("PRICE DOWN: %f to %f (%.2f%%)", $last, $c, $div * 100);
    echo $to . PHP_EOL;
    $last = $c;
}