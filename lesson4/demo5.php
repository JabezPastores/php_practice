<?php

//strict types
declare(strict_types=1); //Strict type requirement
function getSum(int $a, int $b): int {
    return $a + $b;
}
echo getSum(5,15);
echo '<br>';

function greeting(string $name): string{
    return 'Hello ' . $name;
}
echo greeting('Nami');
?>