<?php
function findGCD($num1, $num2) {
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }
    return $num1;
}

function findLCM($num1, $num2) {
    $gcd = findGCD($num1, $num2);
    $lcm = ($num1 * $num2) / $gcd;
    return $lcm;
}

$num1 = 25;
$num2 = 28;

$gcd = findGCD($num1, $num2);
$lcm = findLCM($num1, $num2);

echo "Greatest common divisor of  " . $num1 . " và " . $num2 . " is: " . $gcd . "<br>";
echo "Least common multiple of " . $num1 . " và " . $num2 . " is: " . $lcm;