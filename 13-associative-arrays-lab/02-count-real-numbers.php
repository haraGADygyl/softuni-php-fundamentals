<?php
$input = explode(' ', readline());

$result = [];
foreach ($input as $item) {
    if (key_exists($item, $result)) {
        $result[$item]++;
    } else {
        $result[$item] = 1;
    }
}

uksort($result, function ($a, $b) {
    return $a > $b;
});

foreach ($result as $key => $value) {
    echo "$key -> $value" . PHP_EOL;
}