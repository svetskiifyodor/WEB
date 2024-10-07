<?php


$XSTR = "x";
$strArr = array($XSTR);
for ($i = 0; $i < 10; $i++) {
    $XSTR .= "x";
    array_push($strArr, $XSTR);
}

foreach ($strArr as $str) {
    echo $str, " ";
}
echo "\n";



function arrayFill($value, $num) {
    $arr = array();
    for ($i = 0; $i < $num; $i++) {
        array_push($arr, $value);
    }
    return $arr;
}

$fillarray = arrayFill('qwe', 4);
foreach ($fillarray as $value) {
    echo $value, " ";
}
echo "\n";


$arr2d = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr2d as $arr1d) {
    $sum += array_sum($arr1d);
}
echo "Сумма массива: ", $sum, "\n";

$cicleArr = array();
for ($i = 0; $i < 3; $i++) {
    $row = array();
    for ($j = 1; $j < 4; $j++) {
        array_push($row, 3 * $i + $j);
    }
    array_push($cicleArr, $row);
}
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $cicleArr[$i][$j], " ";
    }
    echo "\n";
}

$exprArr = array(2, 5, 3, 9);
$result = $exprArr[0] * $exprArr[1] + $exprArr[2] * $exprArr[3];
echo "Переменная result : ", $result, "\n";

$user = ['name'=>'Radiant', 'surname'=>'Champions', 'patronymic'=>'Winowich'];
echo $user['surname'] . " " . $user['name'] . " " . $user['patronymic'], "\n";

$date = ['year'=>'1999', 'month'=>'09', 'day'=>'19'];
echo $date['year'] . '-'  . $date['month'] . '-' . $date['day'] . "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];

echo "Кол-во элементов: ", count($arr), "\n";

echo "Последний элемент: ", $arr[count($arr) - 1], "\n";

echo "Пред последний элемент: ", $arr[count($arr) - 2], "\n";