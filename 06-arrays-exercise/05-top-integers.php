<?php
$input = array_map('intval', explode(' ', readline()));

$result = [];
for ($i = 0; $i < count($input); $i++) {
    $is_bigger = true;
    for ($j = $i + 1; $j < count($input); $j++) {
        if ($input[$i] <= $input[$j]) {
            $is_bigger = false;
            break;
        }
    }
    if ($is_bigger) {
        $result[] = $input[$i];
    }
}

echo implode(' ', $result);