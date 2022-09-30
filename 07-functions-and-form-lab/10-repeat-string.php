<?php
$string = readline();
$number = intval(readline());

function repeat_string($str, $num) {
    return str_repeat($str, $num);
}

echo repeat_string($string, $number);