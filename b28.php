<?php
function sumOddNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
$sum = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sum";
?>
