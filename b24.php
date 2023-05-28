<?php
function findLargestOdd($arr) {
    $largestOdd = null;

    foreach ($arr as $value) {
        if ($value % 2 !== 0 && ($largestOdd === null || $value > $largestOdd)) {
            $largestOdd = $value;
        }
    }
    return $largestOdd;
}
$arr = [3,2,4,12,6,99];
$largestOdd = findLargestOdd($arr);
if ($largestOdd !== null) {
    echo "Largest odd number in array: " . $largestOdd;
} else {
    echo "There are no odd numbers in the array.";
}