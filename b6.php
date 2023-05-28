<?php
function sortArray($arr){
    sort($arr);
    return $arr;
}
$arr = [3,2,9,20,5];
$sortedArray = sortArray($arr);
echo "Ascending array: <br>[";
foreach($sortedArray as $Value){
    echo $Value. " , ";
}
echo "]";
