<?php
$input = explode(' ', readline());

$is_equal = false;

if (count($input) == 1) {
    echo '0';
    $is_equal = true;
}

for ($i = 1; $i < count($input); $i++) {
    $left_part = array_slice($input, 0, $i);
    $right_part = array_slice($input, $i + 1, count($input));

    if (array_sum($left_part) == array_sum($right_part)) {
        echo $i;
        $is_equal = true;
        break;
    }
}

if (!$is_equal) {
    echo 'no';
}