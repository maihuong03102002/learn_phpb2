<?php
function calculateSum($n){
    $sum = 0;
    for($i=1;$i<=$n;$i++){
        $sum+=$i;
    }
    return $sum;
}
$n = 5;
$sum = calculateSum($n);
echo "sum 1 between $n is: $sum";