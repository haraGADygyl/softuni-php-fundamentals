<?php
$number = intval(readline());

$parking_arr = [];
for ($i = 0; $i < $number; $i++) {
    $input_arr = explode(' ', readline());

    $action = $input_arr[0];
    $name = $input_arr[1];

    if ($action === 'register') {
        $licence_plate = $input_arr[2];

        if (!key_exists($name, $parking_arr)) {
            $parking_arr[$name] = $licence_plate;

            echo "$name registered $licence_plate successfully" . PHP_EOL;
        } else {
            echo "ERROR: already registered with plate number $parking_arr[$name]" . PHP_EOL;
        }
    } else {
        if (!key_exists($name, $parking_arr)) {
            echo "ERROR: user $name not found" . PHP_EOL;
        } else {
            unset($parking_arr[$name]);
            echo "$name unregistered successfully" . PHP_EOL;
        }
    }
}

foreach ($parking_arr as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}