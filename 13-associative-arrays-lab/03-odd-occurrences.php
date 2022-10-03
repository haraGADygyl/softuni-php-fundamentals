<?php
$input = explode(' ', readline());

$result = [];

foreach ($input as $item) {
    $item_lower = strtolower($item);

    if (key_exists($item_lower, $result)) {
        $result[$item_lower]++;
    } else {
        $result[$item_lower] = 1;
    }
}

foreach ($result as $key => $value) {
    if ($value % 2 == 1) {
        echo $key . ' ';
    }
}