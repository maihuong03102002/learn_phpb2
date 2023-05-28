<?php
function findLargestNegative($arr) {
    $largestNegative = null;
    foreach ($arr as $value) {
        if ($value < 0 && ($largestNegative === null || $value > $largestNegative)) {
            $largestNegative = $value;
        }
    }
    return $largestNegative;
}

// Mảng ban đầu
$arr = [5, -3, 0, -7, 12, -9, -2];

$largestNegative = findLargestNegative($arr);

if ($largestNegative !== null) {
    echo "Maximum negative number in array: " . $largestNegative;
} else {
    echo "There are no negative numbers in the array.";
}

