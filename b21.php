<?php
function findSecondNumber($arr) {
    $number = $arr[0];
    $secondNumber = $arr[0];
    foreach ($arr as $value) {
        if ($value > $number) {
            $secondNumber = $number;
            $number = $value;
        } elseif ($value > $secondNumber && $value < $number) {
            $secondNumber = $value;
        }
    }

    return $secondNumber;
}
$arr = array(9,20,28,10,33);
$secondNumber = findSecondNumber($arr);
echo "the second largest number in the array is: " . $secondNumber;