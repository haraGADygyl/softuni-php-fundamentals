<?php
$allowed_coins = [0.1, 0.2, 0.5, 1.0, 2.0];

$coin = readline();

$sum = 0.0;
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
        $product = readline();
        continue;
    }

    if ($product === 'Nuts' && round($sum, 2) >= 2) {
        $sum -= 2;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } elseif ($product === 'Water' && round($sum, 2) >= 0.7) {
        $sum -= 0.7;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } elseif ($product === 'Crisps' && round($sum, 2) >= 1.5) {
        $sum -= 1.5;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } elseif ($product === 'Soda' && round($sum, 2) >= 0.8) {
        $sum -= 0.8;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } elseif ($product === 'Coke' && round($sum, 2) >= 1) {
        $sum -= 1;
        echo 'Purchased ' . strtolower($product) . PHP_EOL;
    } else {
        echo 'Sorry, not enough money' . PHP_EOL;
    }

    $product = readline();
}

echo 'Change: ' . number_format($sum, 2);