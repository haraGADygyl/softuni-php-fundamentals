<?php
$input = preg_split('/[ ,.?!]]*/', readline());

$result = [];
foreach ($input as $item) {
    if ($item && $item === strrev($item)) {
        $result[] = $item;
    }
}
$result = array_unique($result);
natcasesort($result);

echo implode(', ', $result);