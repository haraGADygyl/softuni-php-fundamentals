<?php

$numbers = explode(" ", readline());

foreach ($numbers as $number) {
    echo number_format($number, 2) . ' => ' . round($number) . PHP_EOL;
}