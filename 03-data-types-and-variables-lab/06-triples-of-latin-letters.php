<?php
$number = intval(readline());

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
        for ($k = 0; $k < $number; $k++) {
            echo chr(97 + $i);
            echo chr(97 + $j);
            echo chr(97 + $k) . PHP_EOL;
        }
    }
}