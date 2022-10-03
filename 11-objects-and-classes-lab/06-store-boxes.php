<?php

class Item
{
    private $name;
    private $item_price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->item_price = $price;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_item_price()
    {
        return $this->item_price;
    }
}

class Box
{
    private $serial_number;
    private $item;
    private $item_quantity;
    private $box_price;

    public function __construct($serial_number, $item, $item_quantity, $price)
    {
        $this->serial_number = $serial_number;
        $this->item = $item;
        $this->item_quantity = $item_quantity;
        $this->box_price = $price;
    }

    public function get_serial_number()
    {
        return $this->serial_number;
    }

    public function get_item()
    {
        return $this->item;
    }

    public function get_item_quantity()
    {
        return $this->item_quantity;
    }

    public function get_box_price()
    {
        return $this->box_price;
    }
}

$input = readline();

$boxes_arr = [];
while ($input != 'end') {
    $input_split = explode(' ', $input);

    $serial_number = $input_split[0];
    $item_name = $input_split[1];
    $item_quantity = intval($input_split[2]);
    $item_price = floatval($input_split[3]);

    $item = new Item($item_name, $item_price);
    $price_for_box = round($item->get_item_price() * $item_quantity, 2);

    $box = new Box($serial_number, $item, $item_quantity, $price_for_box);

    $boxes_arr[] = $box;

    $input = readline();
}

usort($boxes_arr, function ($first, $second) {
    return $first->get_box_price() < $second->get_box_price();
});


foreach ($boxes_arr as $box) {
    echo $box->get_serial_number() . PHP_EOL;
    $formatted_item_price = number_format($box->get_item()->get_item_price(), 2, '.', '');
    $formatted_box_price = number_format($box->get_box_price(), 2, '.', '');

    echo "-- {$box->get_item()->get_name()} - \${$formatted_item_price}: {$box->get_item_quantity()}" . PHP_EOL;
    echo "-- \${$formatted_box_price}" . PHP_EOL;
}