<?php

// Comments on a single line
/*
This is multi
line comment 
*/

// 1. Simple Variables
$firstName = "David";
$luxPopulation = 5000000;
$height = 1.9;
$isGreat = true;
$a = 5;

// Display variable

echo $firstName . '<br>' . $luxPopulation;
echo "<h1>" . $firstName . "</h1>";

echo '<br>';
echo gettype($firstName);
echo '<br>';
var_dump($firstName);
echo '<br>';


// Short way

$a += 2;
$a++;

$string1 = "Just a regular sentence";
$string2 = 'also a regular sentence';

$color = 'red';

// Double quotes interpret variables when single quotes do not
echo 'It happens that my face goes $color <br>';
echo 'It happens that my face goes ' . $color . '<br>';
echo "It happens that my face goes $color <br>";

// Escape character

$str = 'this is a beautiful day. it\'s wonderful';
