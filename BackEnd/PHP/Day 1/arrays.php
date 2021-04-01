<?php
// Arrays

$str = "string";
echo $str[0];
echo '<br>';

$myArray = ['Nightcrawler', 'Star Wars', 'Inception'];

//var_dump($myArray);

echo $myArray[0];
echo '<br>';
$movies = array(
    1 => 'Star Wars',
    0 => 'NightCrawler',
    2 => 'Inception',
    5 => 'Saving private Ryan'
);


echo '<pre>';
var_dump($movies);
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
//To add new element at the end of array 
$movies[] = 'Batman : The Dark Knight';

// Remove an element

unset($movies[0]);

echo '<pre>';;
echo '</pre>';

sort($movies);


$person1 = [
    'firstName' => 'simon',
    'age' => 30,
    'mail' => 'simon@simon.fr'
];

$movies = [
    'Nightcrawler' => [
        'director' => 'Dan Gilroy',
        'release' => 2014
    ],
    'Star Wars' => [
        'director' => 'Lucas',
        'release' => 1985
    ],
    'Inception' => [
        'director' => 'Christopher Nolan',
        'release' => 2010
    ]
];
echo $movies['Nightcrawler']['release'];
