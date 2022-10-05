<?php
$input = explode(' ', readline());

$first_word = $input[0];
$second_word = $input[1];

$shortest_word = min(strlen($first_word), strlen($second_word));
$longest_word = max(strlen($first_word), strlen($second_word));

$result = 0;
for ($i = 0; $i < $shortest_word; $i++) {
    $result += ord($first_word[$i]) * ord($second_word[$i]);
}

if (strlen($first_word) > strlen($second_word)) {
    $remaining = substr($first_word, $shortest_word);
} else {
    $remaining = substr($second_word, $shortest_word);
}

for ($i = 0; $i < strlen($remaining); $i++) {
    $result += ord($remaining[$i]);
}

echo $result;