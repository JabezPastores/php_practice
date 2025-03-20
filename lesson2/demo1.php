<?php

$names = array('John','Jack','Jill');
$numbers = [1,2,3,4,5,6];

//var_dump($names);
//echo $names[0];

$numbers[] =100;
$numbers[] =101;
$numbers[3]=400;

unset($numbers[3]); //to remove an element from an array
$numbers = array_values($numbers); //to reindex the array


echo '<pre>';
var_dump($numbers);
echo '</pre>';
?>