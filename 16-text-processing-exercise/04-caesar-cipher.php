<?php
$input = readline();

for ($i = 0; $i < strlen($input); $i++) {
    $input[$i] = chr(ord($input[$i]) + 3);
}

echo $input;