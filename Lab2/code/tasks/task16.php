<?php

function increaseEnthusiasm($str) {
    return $str . "!";
}

echo increaseEnthusiasm("Hello World"), "\n";

function repeatThreeTimes($str) {

    return $str . $str . $str;
}

echo repeatThreeTimes("qwerty"), "\n";
echo increaseEnthusiasm(repeatThreeTimes("asd")), "\n";


function cut($str, $first=10) {
    return substr($str, 0, $first);
}

echo cut("12345678910111213"), "\n";
echo cut("12345678910111213", 3), "\n";

function printArray($array, $index=0) {
    echo $array[$index], " ";
    if ($index + 1 < count($array)) {
        printArray($array, $index + 1);
    }
}

$array = array(1, 2, 3, 4, 5, 6, 7, 9);
printArray($array);
echo "\n";

function sum9($num) {
    $sum = 0;
    $arr = str_split((string) $num);
    foreach($arr as $v) {
        $sum += (int) $v;
    }

    if ($sum > 9) return sum9($sum);
    else return $sum;
}

$num = 12345;
echo sum9($num), "\n";