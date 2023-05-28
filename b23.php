<?php
function isPerfectNumber($number) {
    if ($number <= 0) {
        return false;
    }

    $sum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
        }
    }

    if ($sum === $number) {
        return true;
    } else {
        return false;
    }
}

$number = 28;

if (isPerfectNumber($number)) {
    echo $number . " is the perfect number.";
} else {
    echo $number . " not a perfect number.";
}