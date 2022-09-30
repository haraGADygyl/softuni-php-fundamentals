<?php
$input = explode(' ', readline());
$rotations_count = intval(readline());

$input_length = count($input);
$rotations = $rotations_count % $input_length;

for ($i = 0; $i < $rotations; $i++) {
    if ($input_length == $rotations_count) {
        break;
    }
    $input[] = array_shift($input);
}

echo implode(' ', $input);