<?php
$input = readline();

function password_validator($password)
{
    $char_length = char_length($password);
    $check_letters_and_digits = check_letters_and_digits($password);
    $at_least_two_digits = at_least_two_digits($password);

    if ($char_length === 'true' && $check_letters_and_digits === 'true' && $at_least_two_digits === 'true') {
        return 'Password is valid';
    }

    $result = [];
    if ($char_length != 'true') {
        $result[] = $char_length;
    }

    if ($check_letters_and_digits != 'true') {
        $result[] = $check_letters_and_digits;
    }

    if ($at_least_two_digits != 'true') {
        $result[] = $at_least_two_digits;
    }

    return implode(PHP_EOL, $result);

}

function char_length($password)
{
    if (strlen($password) >= 6 && strlen($password) <= 10) {
        return 'true';
    }
    return 'Password must be between 6 and 10 characters';
}

function check_letters_and_digits($password)
{
    if (ctype_alnum($password)) {
        return 'true';
    }
    return 'Password must consist only of letters and digits';
}

function at_least_two_digits($password)
{
    $digits_count = preg_match_all("/[0-9]/", $password);
    if ($digits_count >= 2) {
        return 'true';
    }
    return 'Password must have at least 2 digits';

}

echo password_validator($input);