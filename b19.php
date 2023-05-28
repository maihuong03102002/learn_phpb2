<?php
function sortArrayDes($arr) {
    rsort($arr);
    return $arr;
}
$arr = [28,4,9,5,3,10];
$sortedArray = sortArrayDes($arr);
echo "Sorted array in descending order: <br>[";
foreach ($sortedArray as $element) {
    echo $element . " , ";
}
echo "]";
