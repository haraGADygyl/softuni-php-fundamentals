<?php
$input = explode(" ", readline());

while (count($input) > 1) {
    $input_length = count($input);
    $current_array = [];

    for ($i = 0; $i < $input_length - 1; $i++) {
        $current_array[] = intval($input[$i]) + intval($input[$i + 1]);
    }
    $input = $current_array;
}

echo $input[0];