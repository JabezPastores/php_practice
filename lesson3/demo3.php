<?php 
/*COMPARISON LOGICAL OPERATORS
==  Equal to
=== Idential to
!= Not Equal to
<> Not Equal to
!== Not Identical to
< Less than
> Greater than
<=  Less than or Equal to
>=  Greater than or Equal to

and True if both are true
&&  True if both are true
or True if either is true
|| True if either is true
xor True if one is true
! True if it is not true

*/

$x = 10;
$y ='10';

//var_dump($x == $y); //true
//var_dump($x === $y); //false
//var_dump($x != $y); //false
//var_dump($x <> $y); //false
//var_dump($x !== $y) //true
//var_dump($x < $y) //false
//var_dump($x > $y) //false
//var_dump($x <= $y) //true
//var_dump($x >= $y) //true

$a = 10;
$b = 20;

//var_dump($a == 10 and $b == 20); //true
//var_dump($a == 10 or $b ==20); //true
//var_dump($a == 10 xor $b ==20); //false
//var_dump($a == 10 && $b == 20); //true
//var_dump($a == 10 || $b == 20); //true
//var_dump(!($x == 5)); //true

?>
