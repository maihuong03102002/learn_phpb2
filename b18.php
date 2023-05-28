<?php
function countOccurrences($array, $element){
    $count = 0;
    foreach ($array as $value) {
        if ($value == $element) {
            $count++;
        }
    }
    return $count;   
}
$array = array(3,2,4,5,2,0,3,10);
$element = 3; // Phần tử cần đếm số lần xuất hiện
$occurrences = countOccurrences($array, $element);
echo "The number of occurrences of the element " . $element ." in the array is: " . $occurrences;