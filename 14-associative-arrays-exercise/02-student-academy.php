<?php
$number = intval(readline());

$student_grades = [];
for ($i = 0; $i < $number; $i++) {
    $name = readline();
    $grade = floatval(readline());

    if (key_exists($name, $student_grades)) {
        $student_grades[$name] = ($student_grades[$name] + $grade) / 2;
    } else {
        $student_grades[$name] = $grade;
    }
}

arsort($student_grades);

foreach ($student_grades as $key => $value) {
    if ($value >= 4.5) {
        $value = number_format($value, 2);
        echo "$key -> $value" . PHP_EOL;
    }
}