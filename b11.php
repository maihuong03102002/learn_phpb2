<?php
function isArmstrong($n) {
	$sum = 0;
	$temp = $n;
	$numDigits =strlen($n);
		
	while ($temp > 0) {
		$digit = $temp % 10;
		$sum += pow($digit, $numDigits);
		$temp = (int)($temp / 10);
	}
		
	if ($sum===$n) {
		return true;
	} else {
		return false;
	}
}
		
// Số cần kiểm tra
$n = 53;		
if (isArmstrong($n)) {
	echo $n . " is Armstrong's number.";
} else {
	echo $n . " not the Armstrong number.";
}