<?php
$day = readline();
$age = intval(readline());

$is_error = false;
$ticket_price = null;

if ($age < 0 || $age > 122) {
    echo 'Error!';
    $is_error = true;
} elseif ($age <= 18) {
    if ($day == 'Weekday') {
        $ticket_price = 12;
    } elseif ($day == 'Weekend') {
        $ticket_price = 15;
    } elseif ($day == 'Holiday') {
        $ticket_price = 5;
    } else {
        echo 'Invalid day!';
        exit();
    }
} elseif ($age <= 64) {
    if ($day == 'Weekday') {
        $ticket_price = 18;
    } elseif ($day == 'Weekend') {
        $ticket_price = 20;
    } elseif ($day == 'Holiday') {
        $ticket_price = 12;
    } else {
        echo 'Invalid day!';
        exit();
    }
} else {
    if ($day == 'Weekday') {
        $ticket_price = 12;
    } elseif ($day == 'Weekend') {
        $ticket_price = 15;
    } elseif ($day == 'Holiday') {
        $ticket_price = 10;
    } else {
        echo 'Invalid day!';
        exit();
    }
}

if (!$is_error) {
    echo $ticket_price . '$';
}