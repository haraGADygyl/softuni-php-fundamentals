<?php
$input = explode(', ', readline());

foreach ($input as $item) {
    if (strlen($item) < 3 || strlen($item) > 16) {
        continue;
    }

    if (preg_match('/[^a-zA-Z0-9-_]+/', $item)) {
        continue;
    }

    echo $item . PHP_EOL;
}