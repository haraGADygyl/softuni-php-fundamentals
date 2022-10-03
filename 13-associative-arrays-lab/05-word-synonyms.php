<?php
$number = intval(readline());

$result = [];
for ($i = 0; $i < $number; $i++) {
    $word = readline();
    $synonym = readline();

    if (key_exists($word, $result)) {
        $result[$word][] = $synonym;
    } else {
        $result[$word] = [$synonym];
    }
}

uksort($result, function ($a, $b) use ($result) {
    $count_a = count($result[$a]);
    $count_b = count($result[$b]);

    if ($count_a === $count_b) {
        return $a <=> $b;
    }
    return $count_b <=> $count_a;
});

foreach ($result as $key => $value) {
    echo $key . ' - ' . implode(', ', $value) . PHP_EOL;
}