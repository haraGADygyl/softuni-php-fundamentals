<?php
$number = readline();
$multiplier = intval(readline());

$mul = gmp_mul($number,$multiplier);
echo gmp_strval($mul);