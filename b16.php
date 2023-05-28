<?php
function countArray($arr){  
    return count($arr);     
}
$arr = [5,10,3,8,3,2,7];
$count = countArray($arr);
echo "The number of elements in the array is: " . count($arr); 