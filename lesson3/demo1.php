<?php 

$age = 17;
$ave = 75;

//if statement
if ($age >= 18){
    echo 'You are allowed to vote';
}

echo '<br>';
//if-else
if($ave >= 75){
    echo 'Your average is Passed';
}else{
    echo 'Your average is Failed';
}
echo '<br>';
//Nexted if statement
if($age >= 18){
    echo 'You are allowed to vote';
}else{
    if($age == 17){
        echo 'wait for 1 year to vote..';
    }else{
        echo 'You are not allowed to vote';
    }
}
echo '<br>';
//if else if
if($ave == 100){
    echo 'Your average is Excellent!';
}else if($ave >= 90){
    echo 'Your average is Very Good';
}else if($ave >= 80){
    echo 'Your average is Good';
}else{
    echo 'Your average is FAILED!!!';
} 

?>
