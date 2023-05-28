<?php
function findPerfectSquares($start, $end) {
    $perfectSquares = [];

    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == intval(sqrt($i))) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}

$start = 5;
$end = 20;
$perfectSquares = findPerfectSquares($start, $end);

echo "The perfect squares between $start and $end are: ";
foreach ($perfectSquares as $number) {
    echo $number . " ";
}
?>
