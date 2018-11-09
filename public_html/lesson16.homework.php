<?php
// lesson16.homework ARTUR

// Create an array of integers
define('ARRAY_SIZE', '10');
$arr = [];
for ($i = 0; $i < ARRAY_SIZE; $i++) {
    $arr[] = rand(-100, 100);
}


// Create function outArrElem
function outArrElem($x, $array)
{
    echo "$x element of the array is: $array[$x]" . PHP_EOL;
    return;
}


// Outputting array elements with FOR
for ($i = 0; $i < ARRAY_SIZE; $i++) {
    outArrElem($i, $arr);
}


// Outputting array elements with WHILE
echo PHP_EOL;
$i = 0;
while ($i < ARRAY_SIZE) {
    outArrElem($i, $arr);
    $i++;
}


// Outputting array elements with DO-WHILE
echo PHP_EOL;
$i = 0;
do {
    outArrElem($i, $arr);
    $i++;
} while ($i < ARRAY_SIZE);


// Outputting array elements with FOREACH
echo PHP_EOL;
foreach ($arr as $key => $value) {
    outArrElem($key, $arr);
}


// Create function multСurrentByNext
function multСurrentByNext($x, $array)
{
    if ($x != (ARRAY_SIZE - 1)) {
        echo "{$array[$x]} x {$array[$x + 1]} = " . $array[$x] * $array[$x + 1];
    } else echo "{$array[$x]} x {$array[0]} = " . $array[$x] * $array[0];
    echo PHP_EOL;
    return;
}


// Outputting mult elements array with FOR
echo PHP_EOL;
for ($i = 0; $i < ARRAY_SIZE; $i++) {
    multСurrentByNext($i, $arr);
}


// Outputting mult elements array with WHILE
echo PHP_EOL;
$i = 0;
while ($i < ARRAY_SIZE) {
    multСurrentByNext($i, $arr);
    $i++;
}


// Outputting mult elements array with DO-WHILE
echo PHP_EOL;
$i = 0;
do {
    multСurrentByNext($i, $arr);
    $i++;
} while ($i < ARRAY_SIZE);


// Outputting mult elements array with FOREACH
echo PHP_EOL;
foreach ($arr as $key => $value) {
    multСurrentByNext($key, $arr);
}