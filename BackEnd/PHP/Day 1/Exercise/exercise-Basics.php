<?php
$fruits = ['Apple', 'Strawberry', 'Pineapple', 'Lemon'];
echo $fruits[1];
echo "<br>";
/*--------------------*/


$inventory = [[
    "item" => "T-Shirts",
    "count" => "20"
], [
    "item" => "Caps",
    "count" => "10"
], [
    "item" => "Shoes",
    "count" => "5"
]];

echo 'there are ' . $inventory[1]['count'] . ' ' . $inventory[1]['item'];
echo "<br>";


/*----------------------*/

$inventory[1]['count'] += 5;
$inventory[2]['count'] += 20;


echo $inventory[0]['item'] . ' : ' . $inventory[0]['count'] . ' <br> ';
//echo $inventory[1]['item'] . ' : ' . $inventory[1]['count'] . ' <br> ';
//echo $inventory[2]['item'] . ' : ' . $inventory[2]['count'] . ' <br> ';

echo "<br>";


/*----------------------*/

$contacts = [
    [
        "Name" => "Ricardo",
        "Tel" => '0677777777',
        "Email" => "ricardo@gmail.com",
    ], [
        "Name" => "Michael",
        "Tel" => '0606060606',
        "Email" => "mj@gmail.com",
    ],
    [
        "Name" => "Emmanuel",
        "Tel" => '0610101010',
        "Email" => "manu@gmail.com",
    ]
];

/*---------------------------------*/

$imgUrl = "barbarian.ico";
$name = "Jöhrm";
$lastName = "Big Man";
$stats = ["attack" => 5, "defense" => 1, "special" => "rage"];
echo '<div style="text-align : center; background-color : grey; width : 500px; margin : auto; border-radius : 30px;">';
echo '<img src="' . $imgUrl . '"> <br>';
echo '<h1> Name : ' . $name . "</h1> <br>";
echo '<h2> Sirname : ' . $lastName . "</h2> <br>";
echo '<p> Attack : ' . $stats["attack"] . '</p> <br>';
echo '<p> Defense : ' . $stats["defense"] . '</p> <br>';
echo '<p> Special : ' . $stats["special"] . '</p> <br>';
echo '</div>';
