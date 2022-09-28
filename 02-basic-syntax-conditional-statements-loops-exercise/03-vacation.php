<?php
$group_count = intval(readline());
$group_type = readline();
$day = readline();

$single_person_price = 0;

if ($day == 'Friday') {
    if ($group_type == 'Students') {
        $single_person_price = 8.45;
    } elseif ($group_type == 'Business') {
        $single_person_price = 10.90;
    } elseif ($group_type == 'Regular') {
        $single_person_price = 15;
    }
} elseif ($day == 'Saturday') {
    if ($group_type == 'Students') {
        $single_person_price = 9.80;
    } elseif ($group_type == 'Business') {
        $single_person_price = 15.60;
    } elseif ($group_type == 'Regular') {
        $single_person_price = 20;
    }
} elseif ($day == 'Sunday') {
    if ($group_type == 'Students') {
        $single_person_price = 10.46;
    } elseif ($group_type == 'Business') {
        $single_person_price = 16;
    } elseif ($group_type == 'Regular') {
        $single_person_price = 22.50;
    }
}

$group_price = $single_person_price * $group_count;

if ($group_type == 'Students' && $group_count >= 30) {
    $group_price -= $group_price * 0.15;
} elseif ($group_type == 'Business' && $group_count >= 100) {
    $group_price -= $single_person_price * 10;
} elseif ($group_type == 'Regular' && ($group_count >= 10 && $group_count <= 20)) {
    $group_price -= $group_price * 0.05;
}

echo 'Total price: ' . number_format($group_price, 2, ".", "");