<?php
$number = intval(readline());

$day_names = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

if (isset($day_names[$number-1])) {
    echo $day_names[$number-1];
} else {
    echo 'Invalid Day!';
}