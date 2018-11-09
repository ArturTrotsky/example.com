<?php
// lesson15.Le-Tuchka ARTUR

// a
define('ARRAY_SIZE', 20);
$a = [];
for ($i = 0; $i < ARRAY_SIZE; $i++) {
  $a[] = rand(-10, 10);
}

// b
$b = [];
$c = [];

//c
foreach ($a as $value) {
    if ($value > 0) $b[] = $value;
    elseif ($value < 0) $c[] = $value;
}

// d
if (count($b) > count($c)) {
    echo "Размер массива 'b' больше массива 'с' и равен: " . count($b);
}