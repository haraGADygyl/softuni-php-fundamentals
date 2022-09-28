<?php
$number = intval(readline());

for ($i = 1; $i <= $number; $i++) {
    echo str_repeat($i . " ", $i) . PHP_EOL;
}