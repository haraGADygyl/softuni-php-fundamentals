<?php
$needle = readline();
$haystack = readline();

while (true) {
    $old_haystack = $haystack;

    $haystack = str_replace($needle, '', $haystack);

    if ($haystack === $old_haystack) {
        echo $haystack;
        break;
    }
}