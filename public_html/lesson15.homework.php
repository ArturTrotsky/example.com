<?php
// lesson15.homework ARTUR

// Функции: sum, mul
function sum($x, $y)
{
    return $x + $y;
}

function mul($x, $y)
{
    return $x * $y;
}


// Три переменные (целые числа): $a, $b, $c
$a = 1;
$b = 2;
$c = 2;


// При помощи условия вывести какая из переменных больше
// Решение 1
echo "a = {$a}, b = {$b}, c = $c" . PHP_EOL;
if ($a > $b && $a > $c) echo 'Переменная $а больше $b и $с и равна: ' . $a;
elseif ($a == $b && $b > $c) echo 'Переменные $а и $b одинаковы и больше $с и равны: ' . $a;
elseif ($a == $b && $b == $c) echo 'Переменные $a, $b, $c одинаковы и равны: ' . $a;
elseif ($a <= $b && $b < $c) echo 'Переменная $c больше $a и $b и равна: ' . $c;
elseif ($a < $b && $b == $c) echo 'Переменные $b и $c одинаковы и больше $a и равны: ' . $b;
elseif ($a == $c && $a > $b) echo 'Переменные $a и $c одинаковы и больше $b и равны: ' . $a;
elseif ($a > $b && $a < $c) echo 'Переменная $c больше $a и $b и равна: ';
else echo 'Переменная $b больше $a и $с и равна: ' . $b;
echo PHP_EOL;


// При помощи условия вывести какая из переменных больше
// Решение 2
echo PHP_EOL;
echo "a = {$a}, b = {$b}, c = $c" . PHP_EOL;
switch ($a <=> $b) {
    case 0:
        switch ($a <=> $c) {
            case 0:
                echo 'Переменные $a, $b, $c одинаковы и равны: ' . $a;
                break;
            case 1:
                echo 'Переменные $а и $b одинаковы и больше $с и равны: ' . $a;
                break;
            case -1:
                echo 'Переменная $c больше $a и $b и равна: ' . $c;
                break;
        }
        break;
    case 1:
        switch ($a <=> $c) {
            case 0:
                echo 'Переменные $a и $c одинаковы и больше $b и равны: ' . $a;
                break;
            case 1:
                echo 'Переменная $а больше $b и $с и равна: ' . $a;
                break;
            case -1:
                echo 'Переменная $c больше $a и $b и равна: ' . $c;
                break;
        }
        break;
    case -1:
        switch ($b <=> $c) {
            case 0:
                echo 'Переменные $b и $c одинаковы и больше $a и равны: ' . $b;
                break;
            case 1:
                echo 'Переменная $b больше $a и $с и равна: ' . $b;
                break;
            case -1:
                echo 'Переменная $c больше $a и $b и равна: ' . $c;
                break;
        }
        break;
}
echo PHP_EOL;


// При помощи условия отдельного вывести какая переменная меньше
// Решение 1
echo PHP_EOL;
echo "a = {$a}, b = {$b}, c = $c" . PHP_EOL;
if ($a < $b) {
    if ($a < $c) echo 'Переменная $а меньше $b и $с и равна: ' . $a;
    elseif ($a == $c) echo 'Переменные $a и $c одинаковы и меньше $b и равны: ' . $a;
    else echo 'Переменная $c меньше $a и $b и равна: ' . $c;
} elseif ($a == $b) {
    if ($a == $c) echo 'Переменные $a, $b, $c одинаковы и равны: ' . $a;
    elseif ($a < $c) echo 'Переменные $а и $b одинаковы и меньше $с и равны: ' . $a;
    else echo 'Переменная $c меньше $a и $b и равна: ' . $c;
} else {
    if ($b == $c) echo 'Переменные $b и $c одинаковы и меньше $c и равны: ' . $b;
    elseif ($b < $c) echo 'Переменная $b меньше $а и $с и равнa: ' . $b;
    else echo 'Переменная $c меньше $a и $b и равна: ' . $c;
}
echo PHP_EOL;


// При помощи условия отдельного вывести есть ли равные переменные
// Решение 1
echo PHP_EOL;
echo "a = {$a}, b = {$b}, c = $c" . PHP_EOL;
if ($a == $b) {
    if ($a == $c) echo 'Переменные $a, $b, $с равны: ';
    else echo 'Переменные $a и $b равны: ';
    echo $a . PHP_EOL;
} elseif ($b == $c) echo 'Переменные $b и $c равны: ' . $b;
else echo 'Переменные $a, $b, $с не равны между собой';
echo PHP_EOL;


// При помощи условия отдельного вывести равна ли сумма любых двух переменных третьей переменной
// Решение 1
echo PHP_EOL;
echo "a = {$a}, b = {$b}, c = $c" . PHP_EOL;
if ($a == ($b + $c) || $b == ($a + $c) || $c == ($a + $b)) {
    echo 'Cумма каких-то двух переменных равна третьей переменной';
} else echo '1 + 2 не равно 3';
echo PHP_EOL;


// При помощи условия отдельного вывести равно ли
// произведение любых двух переменных третьей переменной
// Решение 1
echo PHP_EOL;
echo "a = {$a}, b = {$b}, c = $c" . PHP_EOL;
if ($a == ($b * $c)) echo '$a = $b * $c';
elseif ($b == ($a * $c)) echo '$b = $a * $c';
elseif ($c == ($a * $b)) echo '$c = $a * $b';
else echo '1 * 2 не равно 3';
echo PHP_EOL;


// При помощи условия отдельного вывести положительное,
// отрицательное значение или равно нулю в каждой из переменных
// Решение 1
echo PHP_EOL;
echo "a = {$a}, b = {$b}, c = $c" . PHP_EOL;

function highLowZero($x) // УСТАЛ ОТ ИФОВ и ЭЛСОФФФФ
{
    if ($x < 0) echo "Число $x отрицательное";
    elseif ($x > 0) echo "Число $x положительное";
    else echo "Число $x равно нулю";
}

highLowZero($a);
echo PHP_EOL;

highLowZero($b);
echo PHP_EOL;

highLowZero($c);
echo PHP_EOL;
