<?php
$lines_count = intval(readline());

$array_one = [];
$array_two = [];

for ($i = 0; $i < $lines_count; $i++) {
    $input = explode(" ", readline());

    if ($i % 2 == 1) {
        $input = array_reverse($input);
    }

    $array_one[] = $input[0];
    $array_two[] = $input[1];
}

echo implode(" ", $array_one);
echo PHP_EOL;
echo implode(" ", $array_two);