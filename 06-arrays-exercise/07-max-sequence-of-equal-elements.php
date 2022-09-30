<?php
$input = explode(' ', readline());

$best_count = 0;
$best_element = 0;
for ($i = 0; $i < count($input); $i++) {
    $repeat = 1;
    for ($j = $i + 1; $j < count($input); $j++) {
        if ($input[$i] === $input[$j]) {
            $repeat++;
        } else {
            break;
        }
    }
    if ($repeat > $best_count) {
        $best_count = $repeat;
        $best_element = $input[$i];
    }
}

echo str_repeat("$best_element ", $best_count);