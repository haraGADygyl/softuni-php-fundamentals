<?php
$banned_words = explode(', ', readline());
$text = readline();

foreach ($banned_words as $banned_word) {
    $asterisks = str_repeat('*', strlen($banned_word));
    $text = str_replace($banned_word, $asterisks, $text );
}

echo $text;