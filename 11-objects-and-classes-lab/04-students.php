<?php
class Student {
    private $first_name;
    private $last_name;
    private $age;
    private $hometown;

    public function __construct($first_name, $last_name, $age, $hometown)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->hometown = $hometown;
    }

    /**
     * @return mixed
     */
    public function get_first_name()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function set_first_name($first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function get_last_name()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function set_last_name($last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function get_age()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function set_age($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function get_hometown()
    {
        return $this->hometown;
    }

    /**
     * @param mixed $hometown
     */
    public function set_hometown($hometown): void
    {
        $this->hometown = $hometown;
    }
}

$input = readline();

$students_arr = [];
while ($input != 'end') {
    $input_arr = explode(' ', $input);

    $first_name = $input_arr[0];
    $last_name = $input_arr[1];
    $age = $input_arr[2];
    $hometown = $input_arr[3];

    $students_arr[] = new Student($first_name, $last_name, $age, $hometown);

    $input = readline();
}

$town_filter = readline();

foreach ($students_arr as $item) {
    if ($town_filter === $item->get_hometown()) {
        echo "{$item->get_first_name()} {$item->get_last_name()} is {$item->get_age()} years old." . PHP_EOL;
    }
}