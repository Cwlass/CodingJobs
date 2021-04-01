<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

function isOrder($array)
{
    for ($i = 0; $i < count($array); $i++) {
        if (isset($array[$i + 1])) {
            if ($array[$i] > $array[$i + 1]) {
                return "The array is not in ascending order";
            }
        }
    }
    return "The array is in ascending order";
}


$mockArray = array(1, 3, 2, 4, 5, 6, 7, 8, 9);
echo isOrder($mockArray);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

function orderArray($array)
{
    $temp = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (isset($array[$i + 1])) {
            if ($array[$i] > $array[$i + 1]) {
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
                $i = -1;
            }
        }
    }
    return $array;
}

$unorderedArray = array(20, 15, 7, 25, 17, 31);
echo "<pre>";
var_dump($unorderedArray);
echo "</pre>";

echo "<pre>";
var_dump(orderArray($unorderedArray));
echo "</pre>";

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

function