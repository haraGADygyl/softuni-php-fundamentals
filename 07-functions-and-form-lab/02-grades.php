<?php
$grade = floatval(readline());

function check_grade($grade)
{
    if ($grade >= 2.00 && $grade <= 2.99) {
        echo 'Fail';
    } elseif ($grade >= 3.00 && $grade <= 3.49) {
        echo 'Poor';
    } elseif ($grade >= 3.50 && $grade <= 4.49) {
        echo 'Good';
    } elseif ($grade >= 4.50 && $grade <= 5.49) {
        echo 'Very good';
    } else {
        echo 'Excellent';
    }
}

check_grade($grade);