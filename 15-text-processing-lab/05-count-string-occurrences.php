<?php
$text = preg_split('/[ ,.?!]/', readline());
$needle = readline();

$counter = 0;
foreach ($text as $item) {
    if ($item === $needle) {
        $counter++;
    }
}

echo $counter;