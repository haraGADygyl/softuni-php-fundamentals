<?php
$wagons_count = intval(readline());

$train = [];
for ($i = 0; $i < $wagons_count; $i++) {
    $passengers_count = intval(readline());
    $train[] = $passengers_count;
}

echo implode(" ", $train);
echo PHP_EOL;
echo array_sum($train);