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
$phanTuCanChen = 'Hello';  
array_splice( $arr, 3, 0, $phanTuCanChen );   
echo "Sau khi chèn " . $phanTuCanChen ."<br>";
echo "array: <br>[";
foreach ($arr as $item) {
	echo (string)$item . ", ";
}
echo "] <br>";