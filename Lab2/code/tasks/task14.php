<?php

$a = 10;
$b = 3;

echo $a % $b, "\n";

if ($a % $b == 0) {
    echo "Делится ", $a / $b;
}
else {
    echo "Делится с остатком ", $a % $b, "\n";
}


$st = pow(2, 10);
echo $st, "\n";

echo 'корень из 245: ', sqrt(245), "\n";

$array = array(4, 2, 5, 19, 13, 0, 10);
$sum_array = 0;
foreach ($array as $elem) {
    $sum_array += $elem**2;
}
echo sqrt($sum_array), "\n";

echo "корень из 379:\n";
echo round(sqrt(379), 0), "\n";
echo round(sqrt(379), 1), "\n";
echo round(sqrt(379), 2), "\n";

echo "корень из 587:\n";
$floor = floor(sqrt(587));
$ceil = ceil(sqrt(587));
$new_array = array('floor'=>$floor, 'ceil'=>$ceil);
echo "floor: ", $new_array['floor'], ", ceil: ", $new_array['ceil'], "\n";

$min_max_array = array(4, -2, 5, 19, -130, 0, 10);
echo "min: ", min($min_max_array), ", max ", max($min_max_array), "\n";

echo "Случайное число от 1 до 100 : ", rand(1, 100), "\n";
$rand_array = array();
for ($i = 0; $i < 10; $i++) {
    array_push($rand_array, rand(1, 100));
}

echo "Random array:\n";
for ($i = 0; $i < 10; $i++) {
    echo $rand_array[$i], " ";
}
echo "\n";

$a = (float)readline("Первое число: ");
$b = (float)readline("Второе число: ");
echo "Их разность по модулю: ", abs($a - $b), "\n";

$negative_and_positive_array = array(1, 2, -1, -2, 3, -3);
$positive_array = array();
for ($i = 0; $i < count($negative_and_positive_array); $i++) {
    $positive_array[] = abs($negative_and_positive_array[$i]);
}
echo "Массив с положительными числами:\n";
for ($i = 0; $i < count($positive_array); $i++) {
    echo $positive_array[$i], " ";
}
echo "\n";

$num = (int)(readline("Введите число: "));
$dividers = array();
for ($i = 1; $i < sqrt($num); $i++) {
    if ($num % $i == 0) {
        array_push($dividers, $i, $num / $i);
    }
}

if (ceil(sqrt($num)) * ceil(sqrt($num)) == $num) {
    array_push($dividers, sqrt($num));
}
echo "Делители ", $num, ":\n";
for ($i = 0; $i < count($dividers); $i++) {
    echo $dividers[$i], " ";
}



echo "\n";
$cur_sum = 0;
$sum_array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
for ($i = 0; $i < count($sum_array); $i++) {
    $cur_sum += $sum_array[$i];
    if ($cur_sum > 10) {
        echo "Нужно первых ", $i + 1, "\n";
        break;
    }
}
