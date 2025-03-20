<?php

function add($a, $b){
    return $a + $b;
}

echo add(5, 3);
echo '<br>';
echo add(5, 5);
echo '<br>';
echo add(10,20);
echo '<br>';

//Default Arguments
function sayHello($name = 'World'){
    return 'Hello ' . $name;
}

$greet = sayHello();
echo $greet;
echo '<br>';

$greet2 = sayHello('Jabez');
echo $greet2;

#variable arguments
echo '<br>';
function addAll(...$numbers){
    $total = 0;
    foreach($numbers as $number){
        $total += $number;
    }
    return $total;
}

echo (addAll(1,2,3,4,5));
echo '<br>';
echo addAll(25,252,52,5252125,25);

?>