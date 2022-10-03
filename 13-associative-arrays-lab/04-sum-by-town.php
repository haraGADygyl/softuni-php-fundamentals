<?php
$input = explode(', ', readline());

$result = [];
for ($i = 0; $i < count($input); $i+=2) {
    if (key_exists($input[$i], $result)) {
        $result[$input[$i]] += intval($input[$i+1]);
    } else {
        $result[$input[$i]] = intval($input[$i+1]);
    }
}

foreach ($result as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}