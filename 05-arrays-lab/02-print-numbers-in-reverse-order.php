<?php
$number = intval(readline());

$output = [];
for ($i = 0; $i < $number; $i++) {
    $output[] = intval(readline());
}

foreach (array_reverse($output) as $item) {
    echo $item . " ";
}
