<?php

class Person
{
    private $name;
    private $id;
    private $age;

    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_age()
    {
        return $this->age;
    }
}

$input = readline();

$people_arr = [];
while ($input != 'End') {
    $input_split = explode(' ', $input);

    $name = $input_split[0];
    $id = $input_split[1];
    $age = $input_split[2];

    $people_arr[] = new Person($name, $id, $age);

    $input = readline();
}

usort($people_arr, function ($a, $b) {
    return $a->get_age() > $b->get_age();
});

foreach ($people_arr as $person) {
    echo "{$person->get_name()} with ID: {$person->get_id()} is {$person->get_age()} years old." . PHP_EOL;
}