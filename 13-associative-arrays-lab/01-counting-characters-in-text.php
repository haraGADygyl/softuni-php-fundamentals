<?php
$input = readline();

$result = [];

for ($i = 0; $i < strlen($input); $i++) {
    $char = $input[$i];

    if (key_exists($char, $result)) {
        $result[$char]++;
    } else {
        $result[$char] = 1;
    }
}

foreach ($result as $key => $value) {
    echo "$key -> $value" . PHP_EOL;
}