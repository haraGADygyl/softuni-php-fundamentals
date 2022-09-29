<?php
$snowballs_count = intval(readline());

$best_snow = 0;
$best_time = 0;
$best_quality = 0;
$best_value = 0;

for ($i = 0; $i < $snowballs_count; $i++) {
    $snowball_snow = intval(readline());
    $snowball_time = intval(readline());
    $snowball_quality = intval(readline());

    $snowball_value = bcpow(($snowball_snow / $snowball_time), $snowball_quality);

    if ($snowball_value > $best_value) {
        $best_snow = $snowball_snow;
        $best_time = $snowball_time;
        $best_quality = $snowball_quality;
        $best_value = $snowball_value;
    }
}

echo "$best_snow : $best_time = $best_value ($best_quality)";