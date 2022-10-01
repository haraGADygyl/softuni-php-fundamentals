<?php
$input = readline();

function vowels_count($str) {
    echo preg_match_all('/[aeiou]/i', $str);
}

vowels_count($input);