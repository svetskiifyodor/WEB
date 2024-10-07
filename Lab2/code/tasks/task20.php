<?php

$numArr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo "Среднее: ", array_sum($numArr) / count($numArr), "\n";

$rangeArr = range(1, 100);
echo "Сумма чисел от 1 до 100: ", array_sum($rangeArr), "\n";

$toSqrtArray = [1, 4, 9, 16, 25, 36];
$sqrtArray = array_map('sqrt', $toSqrtArray);
foreach ($sqrtArray as $sqrt) {
    echo $sqrt, " ";
}
echo "\n";

$AtoZ_Array = array_combine(range('a', 'z'), range(1, 26));

$str = '1234567890';
$pairs = str_split($str, 2);
echo "Сумма пар чисел: ", array_sum($pairs), "\n";