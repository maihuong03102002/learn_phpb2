<?php
$arr = [];
for ($i= 0; $i < 10; $i++) { 
	array_push($arr, rand(0, 100));
}
echo "array: <br>[";
foreach ($arr as $item) {
	echo (string)$item . ", ";
}
echo "] <br>";  
$arrNew = array_unique($arr);   
echo "Mảng sau khi loại bỏ trùng lặp: <br>";
echo "array: <br>[";
foreach ($arrNew as $item) {
	echo (string)$item . ", ";
}
echo "] <br>";