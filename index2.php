<?php
$arr = [
    [1, -2, 3],
    [-4, 5, -6],
    [-7, -8, 10]
];
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr); $j++) {
        if ($arr[$i][$j] > 0) {
            $sum += $arr[$i][$j];
        }
    }
}
echo $sum;
