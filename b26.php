<?php
function findLargestPositive($arr) {
    $largestPositive = null;
    foreach ($arr as $value) {
        if ($value > 0 && ($largestPositive === null || $value > $largestPositive)) {
            $largestPositive = $value;
        }
    }
    return $largestPositive;
}
$arr = [3,0,5,-7,92,9,-2];
$largestPositive = findLargestPositive($arr);
if ($largestPositive !== null) {
    echo "Maximum positive number in array: " . $largestPositive;
} else {
    echo "There are no positive numbers in the array.";
}
?>




