<?php

// task1.a

$Regular_Expressions_task1_a = '/a..b/';
$str1 = 'ahb acb aeb aeeb adcb axeb';

preg_match_all($Regular_Expressions_task1_a, $str1, $found1);
var_dump($found1);


// task1.b
$Regular_Expressions_task1_b = '/[0-9]+/';
// Можно так: $Regular_Expressions_task1_b = '/\d+/'
$str2 = 'a1b2c3';

function cube($number) {
    return $number[0] * $number[0] * $number[0];
}

echo preg_replace_callback($Regular_Expressions_task1_b, "cube", $str2), "\n";