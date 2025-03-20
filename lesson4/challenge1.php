
<?php
//Regular Function
function fahrenheitToCelsius($farenheit){
    return $celcius = (($farenheit - 32)*(5/9));
}
echo fahrenheitToCelsius(90);

//arrow function
$celcius = fn($farenheit) => (($farenheit - 32)*(5/9));
echo '<br>';
echo $celcius(90);



## Challenge 1: Fahrenheit to Celsius 3pts
/*Write a function called `fahrenheitToCelsius` that takes a temperature in Fahrenheit as an argument and returns the temperature in Celsius.

  - Create a named function called `fahrenheitToCelsius` that takes a fahrenheit temperature as an argument. 
  - Return the temperature converted to Celsius.
  - Print to the screen like "68F = 20C. You can use the &deg; entity for the degrees symbol. and 
    &degC for celsius
  - For extra points, convert to an arrow function +2pts

    sample output   68°F = 20°"*/
?>