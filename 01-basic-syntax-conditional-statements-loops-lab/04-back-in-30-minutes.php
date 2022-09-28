<?php
$hours = intval(readline());
$minutes = readline();

if ($minutes + 30 > 59) {
    $hours++;
    $minutes -= 30;
} else {
    $minutes += 30;
}

if ($hours > 23) {
    $hours = 0;
}

echo $hours . ':' . sprintf('%02d', $minutes);