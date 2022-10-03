<?php

class Truck
{
    private $brand;
    private $model;
    private $weight;

    public function __construct($brand, $model, $weight)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->weight = $weight;
    }

    public function get_brand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function get_model()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function get_weight()
    {
        return $this->weight;
    }

}

class Car
{
    private $brand;
    private $model;
    private $horse_power;

    public function __construct($brand, $model, $horse_power)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->horse_power = $horse_power;
    }

    public function get_brand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function get_model()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function get_horse_power()
    {
        return $this->horse_power;
    }

}

class Catalog
{
    private $cars = [];
    private $trucks = [];

    public function __construct($cars, $trucks)
    {
        $this->cars = $cars;
        $this->trucks = $trucks;
    }

    public function get_cars(): array
    {
        return $this->cars;
    }

    public function get_trucks(): array
    {
        return $this->trucks;
    }
}

$input = readline();

$cars_arr = [];
$trucks_arr = [];
while ($input != 'end') {
    $input_split = explode('/', $input);

    $type = $input_split[0];
    $brand = $input_split[1];
    $model = $input_split[2];
    $power_or_weight = $input_split[3];

    if ($type === 'Car') {
        $cars_arr[] = new Car($brand, $model, $power_or_weight);
    } else {
        $trucks_arr[] = new Truck($brand, $model, $power_or_weight);
    }

    $input = readline();
}


usort($cars_arr, function ($first, $second) {
    return $first->get_brand() > $second->get_brand();
});

usort($trucks_arr, function ($first, $second) {
    return $first->get_brand() > $second->get_brand();
});

$catalogue = new Catalog($cars_arr, $trucks_arr);

if ($catalogue->get_cars()) {
    echo 'Cars:' . PHP_EOL;
    foreach ($catalogue->get_cars() as $car) {
        echo "{$car->get_brand()}: {$car->get_model()} - {$car->get_horse_power()}hp" . PHP_EOL;
    }
}

if ($catalogue->get_trucks()) {
    echo 'Trucks:' . PHP_EOL;
    foreach ($catalogue->get_trucks() as $truck) {
        echo "{$truck->get_brand()}: {$truck->get_model()} - {$truck->get_weight()}kg" . PHP_EOL;
    }
}