<?php
function sortArray($arr){
    sort($arr);
    return $arr;
}
$arr = [3,2,9,20];
$sortedArray = sortArray($arr);
echo "Mảng sắp xếp tăng dần :";
foreach($sortedArray as $Value){
    echo $Value. " ";
}