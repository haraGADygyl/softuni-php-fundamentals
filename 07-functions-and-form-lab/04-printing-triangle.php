<?php
$number = intval(readline());

function print_line($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo "$i ";
    }
    echo PHP_EOL;
}

for ($i = 0; $i < $number; $i++) {
    print_line(1, $i);
}

print_line(1, $number);

for ($j = $number - 1; $j >= 0; $j--) {
    print_line(1, $j);
}