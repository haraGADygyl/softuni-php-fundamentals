<?php
$input = array_map('intval', explode(' ', readline()));
$number = intval(readline());

for ($i = 0; $i < count($input); $i++) {
    for ($j = $i + 1; $j < count($input); $j++) {
        if ($input[$j] + $input[$i] === $number) {
            echo "$input[$i] $input[$j]" . PHP_EOL;
        }
    }
}
