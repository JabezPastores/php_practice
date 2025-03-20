<?php
//global scope
//$name = 'Jabez!!';


function sayHello(){
    //local scope
    global $name;
    echo 'Hello ' . $name;
}

sayHello();
echo '<br>';
function sayGoodbye(){
    $name =['Spider','Sonar','Kismet'];
    echo 'Goodbye ' . $name[0];
}

//sayGoodbye();
echo $name[0];
?>