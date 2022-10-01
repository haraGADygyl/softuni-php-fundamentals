<?php
$first_char = readline();
$second_char = readline();

function chars_in_range($char1, $char2) {
    $start = min([$char1, $char2]);
    $end = max([$char1, $char2]);

    $result = [];
    for ($i = ord($start) + 1; $i < ord($end); $i++) {
        $result[] = chr($i) ;
    }
    return implode(' ', $result);
}

echo chars_in_range($first_char, $second_char);