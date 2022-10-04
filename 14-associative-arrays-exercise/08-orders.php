<?php
$input = readline();

$products_arr = [];
while ($input != 'buy') {
    $input_arr = explode(' ', $input);

    $product = $input_arr[0];
    $price = floatval($input_arr[1]);
    $quantity = intval($input_arr[2]);

    if (!key_exists($product, $products_arr)) {
        $products_arr[$product]['price'] = $price;
        $products_arr[$product]['quantity'] = $quantity;
    } else {
        if ($products_arr[$product]['price'] !== $price) {
            $products_arr[$product]['price'] = $price;
        }

        $products_arr[$product]['quantity'] += $quantity;
    }

    $input = readline();
}

foreach ($products_arr as $key => $value) {
    $total = number_format($value['price'] * $value['quantity'], 2, '.', '');

    echo "$key -> $total" . PHP_EOL;
}


