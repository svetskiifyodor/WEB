<?php

function isSumHigherTen($num1, $num2) {
    return $num1 + $num2 > 10;
}

function isEqual($num1, $num2) {
    return $num1 == $num2;
}

$test = 0;
echo ($test == 0 ? "верно\n": "");

$age = 23;

if ($age < 10 || $age > 99)
    echo "Возраст меньше 10 или больше 99\n";
else {
    $sum = 0;
    $arr = str_split((string) $age);
    foreach ($arr as $k => $v) {
        $sum += (int)$v;
    }
    if ($sum <= 9) echo "Сумма цифр однозначна\n";
    else echo "Сумма цифр двузначна\n";
}




$arr = array(1, 2, 3, 4);
if (count($arr) == 3) {
    echo $arr[0] + $arr[1] + $arr[2], "\n";
} else {
    echo "В массиве не 3 элемента\n";
}