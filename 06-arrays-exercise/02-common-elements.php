<?php
$input1 = explode(" ", readline());
$input2 = explode(" ", readline());

foreach ($input2 as $item) {
    if (in_array($item, $input1)) {
        echo $item . " ";
    }
}