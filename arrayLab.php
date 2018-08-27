<?php
//#1
$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$exitSum = 3;
$exitSum;
for ($i = 0; $i<=sizeof($array1); $i++) {

    $sum =+ $array1[$i];
    if ($sum == 10) {
        break;
    }
}
echo "$sum". PHP_EOL . "$i";