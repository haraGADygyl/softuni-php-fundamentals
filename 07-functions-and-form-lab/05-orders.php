<?php
$item = readline();
$items_count = intval(readline());


function orders($item, $count) {
    $menu = ['coffee' => 1.5, 'water' => 1, 'coke' => 1.4, 'snacks' => 2];

    echo number_format($menu[$item] * $count, 2);
}

orders($item, $items_count);