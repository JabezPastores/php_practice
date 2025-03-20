<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

//implicit conversion
$result = $number1 + $number2; //int
$result = $number1 + $number3; //int(string to int)
$result = $number3 + $number3; //It is still an integer
$result = $number1 . $number2; //int(string)
//$result = $fruit + $number1; //Fatal error because string is converted to int
$result = $number1 + $bool1; //int(bool) true = 1
$result = $number1 + $bool2; //int(bool) false = 0
$result = $number1 + $null; //int(null) null = 0

//explicit conversion
$result = (string)$number1;
$result = (int)$number3;
$result = (bool)$number1;

var_dump($result);
?>