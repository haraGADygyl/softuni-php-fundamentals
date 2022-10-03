<?php

class Person
{
    private $first_name;
    private $last_name;
    private $age;

    public function get_first_name()
    {
        return $this->first_name;
    }

    public function set_first_name($first_name)
    {
        $this->first_name = $first_name;
    }

    public function get_last_name()
    {
        return $this->last_name;
    }

    public function set_last_name($last_name)
    {
        $this->last_name = $last_name;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function set_age($age)
    {
        $this->age = $age;
    }
}

$person = new Person();
$person->set_first_name(readline());
$person->set_last_name(readline());
$person->set_age(readline());

echo "firstName: {$person->get_first_name()}" . PHP_EOL;
echo "lastName: {$person->get_last_name()}" . PHP_EOL;
echo "age: {$person->get_age()}" . PHP_EOL;