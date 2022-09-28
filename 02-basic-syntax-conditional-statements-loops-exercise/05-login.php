<?php
$username = readline();

$guess_count = 1;
while (true) {
    $password = readline();

    if ($password === strrev($username)) {
        echo 'User ' . $username . ' logged in.';
        break;
    } else {
        echo 'Incorrect password. Try again.' . PHP_EOL;

        if ($guess_count == 4) {
            echo 'User ' . $username . ' blocked!';
            break;
        }
    }

    $guess_count++;
}