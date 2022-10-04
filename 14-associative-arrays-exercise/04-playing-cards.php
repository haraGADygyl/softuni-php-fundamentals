<?php
$input = readline();

$players_arr = [];
while ($input != 'JOKER') {
    $input_arr = explode(': ', $input);
    $player_name = $input_arr[0];

    if (!key_exists($player_name, $players_arr)) {
        $players_arr[$player_name] = [];
    }

    $cards_arr = explode(', ', $input_arr[1]);

    foreach ($cards_arr as $card) {
        if (!in_array($card, $players_arr[$player_name])) {
            $players_arr[$player_name][] = $card;
        }
    }

    $input = readline();
}

$card_value_map = [
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' => 10,
    'J' => 11,
    'Q' => 12,
    'K' => 13,
    'A' => 14,
];

$card_type_map = [
    'S' => 4,
    'H' => 3,
    'D' => 2,
    'C' => 1,
];

$result_arr = [];
foreach ($players_arr as $key => $value) {
    $player_name = $key;

    foreach ($value as $item) {
        $card_value =  substr($item, 0, -1);
        $card_type = substr($item, -1);

        $card_points = $card_value_map[$card_value] * $card_type_map[$card_type];

        if (key_exists($player_name, $result_arr)) {
            $result_arr[$player_name] += $card_points;
        } else {
            $result_arr[$player_name] = $card_points;
        }
    }
}

foreach ($result_arr as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}