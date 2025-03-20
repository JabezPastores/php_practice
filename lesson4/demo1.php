<?php
//A function is a block of statements that can be used repeatedly in a program.
//A function will not execute automatically when a page loads.
//A function will be executed by a call to the function.

//simple function

function sayHello(){
    echo 'Hello';
}

//call the function
sayHello();

//function return a value

function sayGoodbye(){
    return 'Goodbye';
}
echo(' ' . sayGoodbye());

//store return value in a variable
$goodbye = sayGoodbye();
echo $goodbye;

?>
