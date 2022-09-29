<?php
$input = explode(" ", readline());

$even_sum = 0;
$odd_sum = 0;

foreach ($input as $item) {
    if ($item % 2 == 0) {
        $even_sum += intval($item);
    } else {
        $odd_sum += intval($item);
    }
}

echo $even_sum - $odd_sum;