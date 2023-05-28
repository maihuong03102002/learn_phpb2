<?php
function isPrimeNumber($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

$number = 15;

if (isPrimeNumber($number)) {
    echo $number . " is a prime number.";
} else {
    echo $number . " is not a prime number.";
}
?>
