<?php
$grade = readline();

if ($grade >= 3.00) {
    echo 'Passed!';
} else {
    echo 'Failed!';
}

echo PHP_EOL;

// Ternary operator
echo ($grade >= 3.00) ? 'Passed!' : 'Failed!';