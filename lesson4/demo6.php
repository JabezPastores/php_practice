<?php
//Anonymous Function

$square = function ($number){
    return $number * $number;
};

$result = $square(5);
echo 'The square of 5 is: ' . $result;
echo '<br>';
//closures and outer scope access
function createCounter(){
    $count = 0;
    //define a closure that capture the count variable
    $counter = function() use(&$count){ //to access the count use & then variable name
        return++$count;
    };
    return $counter;
}

$counter = createCounter();
echo $counter().'<br>';
echo $counter().'<br>';
echo $counter().'<br>';
echo $counter().'<br>';
echo $counter().'<br>';
echo $counter().'<br>';
echo $counter().'<br>';
echo $counter().'<br>';
?>