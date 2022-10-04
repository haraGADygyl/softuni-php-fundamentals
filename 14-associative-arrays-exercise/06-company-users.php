<?php
$input = readline();

$company_employees_arr = [];
while ($input != 'End') {
    $input_arr = explode(' -> ', $input);

    $company = $input_arr[0];
    $id = $input_arr[1];

    if (key_exists($company, $company_employees_arr)) {
        if (!in_array($id, $company_employees_arr[$company]))
            $company_employees_arr[$company][] = $id;
    } else {
        $company_employees_arr[$company] = [$id];
    }

    $input = readline();
}

ksort($company_employees_arr);

foreach ($company_employees_arr as $key => $value) {
    echo $key . PHP_EOL;
    foreach ($value as $item) {
        echo "-- $item" . PHP_EOL;
    }
}