<?php
$input = explode(" ", readline());

$sum = 0;
foreach ($input as $item) {
    if ($item % 2 == 0) {
       $sum += intval($item);
    }
}

echo $sum;