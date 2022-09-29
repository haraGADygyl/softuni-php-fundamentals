<?php
$radius = floatval(readline());

echo number_format(pi() * $radius ** 2, 12);