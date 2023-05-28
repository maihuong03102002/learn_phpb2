<?php
//chỉ số của số fibonacci tính từ 0 vd: F0 = 0, F1 = 1, F2 = 1, F3 = 2
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
 
echo ("10 số đầu tiên của dãy số fibonacci: <br>");
for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");
}
