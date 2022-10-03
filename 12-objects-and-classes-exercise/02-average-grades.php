<?php

class Student
{
    private $name;
    private $grades = [];
    private $average;

    /**
     * @param $name
     * @param array $grades
     * @param $average
     */
    public function __construct($name, array $grades, $average)
    {
        $this->name = $name;
        $this->grades = $grades;
        $this->average = $average;
    }

    /**
     * @return mixed
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function get_grades(): array
    {
        return $this->grades;
    }

    /**
     * @return mixed
     */
    public function get_average()
    {
        return $this->average;
    }
}

$count = intval(readline());

$students_arr = [];
for ($i = 0; $i < $count; $i++) {
    $input = explode(' ', readline());

    $student_name = $input[0];

    $grades_arr = [];
    for ($j = 1; $j < count($input); $j++) {
        $grades_arr[] = floatval($input[$j]);
    }

    $students_arr[] = new Student($student_name, $grades_arr, array_sum($grades_arr) / count($grades_arr));
}


usort($students_arr, function (Student $a, Student $b): int {
    if ($a->get_name() === $b->get_name()) {
        return $b->get_average() <=> $a->get_average();
    }
    return $a->get_name() <=> $b->get_name();
});


foreach ($students_arr as $student) {
    if ($student->get_average() >= 5) {
        $formatted_average = number_format($student->get_average(), 2);
        echo "{$student->get_name()} -> $formatted_average" . PHP_EOL;
    }
}