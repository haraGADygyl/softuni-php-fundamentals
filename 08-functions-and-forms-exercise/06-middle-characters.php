<?php
$input = readline();

function middle_char($str)
{
    $mid_char = intval(strlen($str) / 2);
    if (strlen($str) % 2 == 1) {
        return $str[$mid_char];
    } else {
        $left_mid_char = $str[$mid_char - 1];
        $right_mid_char = $str[$mid_char];
        return $left_mid_char.$right_mid_char;
    }
}

echo middle_char($input);