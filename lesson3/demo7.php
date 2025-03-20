<?php
// Ternary Operator
$favoriteColor = 'Red';
$secondFavoriteColor = 'Yellow';
//$color = isset($favoriteColor) ? $favoriteColor : 'blue'; //Checks if there is a color, if theres none, it will be blue

//Null Coalescing operator
//$color = $favoriteColor ?? 'blue';
//echo $color;
//Ternary Operator
//$color2 = isset($favoriteColor) 
    //? $favoriteColor 
    //: (isset($SecondFavoriteColor) 
        //? $secondFavoriteColor 
        //: 'blue');
$color2 = $favoriteColor ?? $secondFavoriteColor ?? 'blue';
echo $color2;
?>