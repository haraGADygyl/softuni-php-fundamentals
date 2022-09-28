<?php
$number = intval(readline());

for ($i = 1; $i <= 10; $i++) {
    echo $number . ' X ' . $i . ' = ' . $number * $i . PHP_EOL;
}

$counter = 1;
while ($counter <= 10) {
    echo $number . ' X ' . $counter . ' = ' . $number * $counter . PHP_EOL;
    $counter++;
}