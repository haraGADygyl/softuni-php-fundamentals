<?php
$allowed_coins = [0.1, 0.2, 0.5, 1.0, 2.0];

$coin = readline();

$sum = 0;
while (is_numeric($coin)) {
    if (in_array((float)$coin, $allowed_coins)) {
        $sum += $coin;
    } else {
        echo 'Cannot accept ' . $coin . PHP_EOL;
    }
    $coin = readline();
}

$allowed_products = ["Nuts", "Water", "Crisps", "Soda", "Coke"];

$product = readline();
while ($product !== 'End') {
    if (!in_array($product, $allowed_products)) {
        echo 'Invalid product' . PHP_EOL;
    }

    if ($product === 'Nuts' && $sum >= 2) {
        $sum -= 2;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } elseif ($product === 'Water' && $sum >= 0.7) {
        $sum -= 0.7;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } elseif ($product === 'Crisps' && $sum >= 1.5) {
        $sum -= 1.5;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } elseif ($product === 'Soda' && $sum >= 0.8) {
        $sum -= 0.8;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } elseif ($product === 'Coke' && $sum >= 1) {
        $sum -= 1;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } else {
        echo 'Sorry, not enough money' . PHP_EOL;
    }

    $product = readline();
}

echo 'Change: ' . number_format($sum, 2);