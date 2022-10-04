<?php
$input = readline();

$courses = [];
while ($input !== 'end') {
    $input_arr = explode(' : ', $input);

    $course = $input_arr[0];
    $student_name = $input_arr[1];

    if (key_exists($course, $courses)) {
        $courses[$course][] = $student_name;
    } else {
        $courses[$course] = [$student_name];
    }

    $input = readline();
}

uasort($courses, function($a, $b){
    return count($a) < count($b);
});

foreach ($courses as $key => $value) {
    sort($value);
    $count = count($value);

    echo "$key: $count" . PHP_EOL;
    foreach ($value as $item) {
        echo "-- $item" . PHP_EOL;
    }
}