<?php 
function sumArray($arr){
    $sum = 0;
    foreach($arr as $value){
        $sum+=$value;
    }
    return $sum;
}
$arr = [2,3,5,9,1];
$sum = sumArray($arr);
echo "The sum of the numbers in the array is: " . $sum;		
		