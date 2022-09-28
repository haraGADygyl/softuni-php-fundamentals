<?php

$student_name = readline();
$student_age = intval(readline());
$student_grade = number_format(readline(), 2);

// Variant 1
echo 'Name: ' . $student_name . ', Age: ' . $student_age . ', Grade: ' . $student_grade;

echo PHP_EOL;

// Variant 2
printf('Name: %s, Age: %d, Grade: %.2f', $student_name, $student_age, $student_grade);