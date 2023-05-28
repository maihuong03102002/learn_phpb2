<?php
function findElementPosition($arr, $element) {
    $positions = array();

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $element) {
            $positions[] = $i;
        }
    }

    return $positions;
}
$arr = array(15,3,5,9,28,5,9);
// Phần tử cần tìm vị trí
$element = 5;
$result = findElementPosition($arr, $element);

if (count($result) > 0) {
    echo "The position of the element " . $element ." in the array is: ";
    foreach ($result as $position) {
        echo $position . " , ";
    }
} else {
    echo "The element " . $element ." is not in the array.";
}