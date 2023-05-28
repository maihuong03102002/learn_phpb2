<?php
function addElement($arr, $element) {
    array_unshift($arr, $element);
    return $arr;
}
$arr = array(3, 5, 9, 10);
// Phần tử cần thêm vào đầu mảng
$element = 88;
$modifiedArray = addElement($arr, $element);
echo "Mảng sau khi thêm phần tử vào đầu: <br>[";
foreach ($modifiedArray as $element) {
    echo $element . " , ";
}
echo " ]";