<?php

//ruglar named function
function add($a, $b){
    return $a + $b;
}

echo add(1,2);
echo '<br>';
//one line arrow function
$add = fn ($a,$b) => $a + $b;

echo $add(1,2);
?>