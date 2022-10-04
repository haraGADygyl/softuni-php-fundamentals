<?php
$input = explode(' ', readline());

foreach ($input as $item) {
    $item_len = strlen($item);

    echo str_repeat($item, $item_len);
}