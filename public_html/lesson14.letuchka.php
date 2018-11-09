<?php
// lesson14.Le-Tuchka ARTUR

$A = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = count($A); $i >= 0; $i--)
echo $A[$i] . PHP_EOL;

function x2($a)
{
    return $a*$a;
}

echo x2(6);

foreach ($A as $a)
$B[] = $a*$a;

var_dump($B);

