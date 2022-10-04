<?php
$input = readline();

$result = [];
$counter = 1;
$current_key = '';
while ($input != 'stop') {

    if (key_exists($input, $result)) {
        $current_key = $input;
    } elseif ($counter % 2 == 1) {
        $result[$input] = 0;
        $current_key = $input;
    } else {
        $result[$current_key] += intval($input);
        $current_key = '';
    }

    $counter++;
    $input = readline();
}

foreach ($result as $key => $value) {
    echo "$key -> {$value}K" . PHP_EOL;
}