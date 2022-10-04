<?php

$materials = ['shards' => 0, 'fragments' => 0, 'motes' => 0];
$junk = [];

while (true) {
    $input = explode(' ', readline());

    $is_found = false;
    for ($i = 0; $i < count($input); $i += 2) {
        $current_count = intval($input[$i]);
        $current_material = strtolower($input[$i + 1]);

        $max_farm = 250;

        if (key_exists($current_material, $materials)) {
            $materials[$current_material] += $current_count;

            if ($materials[$current_material] >= $max_farm) {
                $is_found = true;
                break;
            }
        } else {
            if (key_exists($current_material, $junk)) {
                $junk[$current_material] += $current_count;
            } else {
                $junk[$current_material] = $current_count;
            }
        }
    }

    if ($is_found) {
        break;
    }
}

$legendary_item_map = [
    'shards' => 'Shadowmourne',
    'fragments' => 'Valanyr',
    'motes' => 'Dragonwrath'
];

foreach ($materials as $key => $value) {
    if ($value >= 250) {
        echo "$legendary_item_map[$key] obtained!" . PHP_EOL;

        $materials[$key] -= 250;

        array_multisort(array_values($materials), SORT_DESC, array_keys($materials), SORT_ASC, $materials);
        foreach ($materials as $key1 => $value1) {
            echo "$key1: $value1" . PHP_EOL;
        }

        ksort($junk);
        foreach ($junk as $key2 => $value2) {
            echo "$key2: $value2" . PHP_EOL;
        }
    }
}
