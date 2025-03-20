<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
$output = null;
$num1 = 20;
$num2 = 10;

//Basic Arithmetic
$output = "$num1 + $num2 = " . ($num1 + $num2);
$output = "$num1 - $num2 = " . ($num1 - $num2);
$output = "$num1 * $num2 = " . ($num1 * $num2);
$output = "$num1 / $num2 = " . ($num1 / $num2);
$output = "$num1 % $num2 = " . ($num1 % $num2);

//Appending Assignment Operator
$num3 = 10;
$num3 += 20; // $num3 = $num3 + 20; 
$num3 -= 5; // $num3 = $num3 - 5;
$output = $num3;

//Rand() - Generate a random number
$output = rand();
$output = rand(1, 10);

//round() - Round a float
$output = round(4.5);

//ciel() - Round up
$output = ceil(4.3);

//floor() - Round down
$output = floor(4.9);

//sqrt() - Square root
$output = sqrt(64);

//pi() - Get the value of pi
$output = pi();

//abs() - Absolute value
$output = abs(-4.7);

//max() - Get the highest value
$output = max(1, 2, 3);

//min() - Get the lowest value
$output = min(1, 2, 3);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
       <?php echo $output; ?>
    </div>
  </div>
</body>

</html>