<?php
$first_number = intval(readline());
$second_number = intval(readline());
$third_number = intval(readline());


function find_lowest($n1, $n2, $n3) {
    echo min([$n1, $n2, $n3]);
}

find_lowest($first_number, $second_number, $third_number);