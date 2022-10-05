<?php
$input = explode('\\', readline());

$last_element = end($input);
$last_dot = strrpos($last_element, '.');

$file_name = substr($last_element, 0, $last_dot);
$extension = substr($last_element, $last_dot + 1);

echo "File name: $file_name" . PHP_EOL;
echo "File extension: $extension";