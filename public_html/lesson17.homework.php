<?php
// lesson17.homework ARTUR

function sumArrElements($arr)
{
    $summa = 0;
    if (gettype($arr) == 'array' && count($arr) > 0) {
        foreach ($arr as $value) {
            if (!is_numeric($value)) {
                echo $value . ' - not a number';
                return;
            } else $summa += $value;
        }
        return $summa;
    } else echo 'Argument must be an array of numbers';
}


$a = [1, 2, 3, 4, 5, 6, 7];
echo sumArrElements($a);
echo PHP_EOL;

$a = [1, '2', 3, 4, 5, 6, 7];
echo sumArrElements($a);
echo PHP_EOL;

$a = [1, '2a', 3, 4, 5, 6, 7];
echo sumArrElements($a);
echo PHP_EOL;

$a = [];
echo sumArrElements($a);
echo PHP_EOL;
echo PHP_EOL;

// -------------------------------------------------------------------------//


function positiveNumbersPow($a, $b)
{
    if ($b <= 0) return 1;
    return $a * positiveNumbersPow($a, $b - 1);
}

$x = 2;
$y = 4;

echo "$x в степени $y равно " . positiveNumbersPow($x, $y);
echo PHP_EOL;
echo PHP_EOL;

// -------------------------------------------------------------------------//


$sum = function ($x, $y) {
    return $x + $y;
};

echo $sum(5, 3);
