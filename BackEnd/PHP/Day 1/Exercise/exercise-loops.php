<?php
$imgUrl = "barbarian.ico";
$name = "Jöhrm";
$lastName = "Big Man";
$stats = ["attack" => 15, "defense" => 9, "special" => "rage"];

foreach ($stats as &$value) {
    echo $value . "<br>";
}
/*----------------------------*/

$array = array(
    "Salad" => "1.03",
    "Tomato" => "2.3",
    "Oignon" => "1.85",
    "Red cabbage" => "0.85"
);
$temp;


asort($array);

echo "<pre>";
var_dump($array);
echo "</pre>";


krsort($array);

/*$temp;
foreach ($array as $key => $value) {
    foreach ($array as $key2 => $value2) {
        if ($key < $key2) {
            $temp = $array[$key];
            $array[$key] = $array[$key2];
            $array[$key2] = $temp;
        }
    }
}*/
echo "<pre>";
var_dump($array);
echo "</pre> <br>";

$total = 0;
foreach ($array as $key => $value) {
    $total += $value;
}
echo $total . "<br>";


/*--------------------*/

$numArray = [];
for ($i = 0; $i < 20; $i++) {
    $numArray[$i] = $i + 1;
}
echo "<pre>";
var_dump($numArray);
echo "</pre> <br>";




$numArrayW = [];
$i = 0;
while ($i < 20) {
    $numArrayW[$i] = $i + 1;
    $i++;
}
echo "<pre>";
var_dump($numArrayW);
echo "</pre> <br>";

/*-------------------*/

$multArray = [0];

for ($i = 1; $i <= 10; $i++) {
    $multArray[$i] = $i * 2;
}
echo "<pre>";
var_dump($multArray);
echo "</pre> <br>";

/*------------------*/
$randArray = [0];

for ($i = 0; $i < 10; $i++) {
    $randArray[$i] = rand(0, 100);
}


$maxI = 0;
$minI = 0;


for ($i = 0; $i < 10; $i++) {

    if ($i > 0) {
        if ($randArray[$maxI] < $randArray[$i]) {
            $maxi = $i;
        }
        if ($randArray[$minI] > $randArray[$i]) {
            $minI = $i;
        }
    }
}

for ($i = 0; $i < count($randArray); $i++) {
    echo $randArray[$i] . " ";
}
echo "<br>";

echo "position : " . $maxI . " value = " . $randArray[$maxI] . "<br>";
echo "position : " . $minI . " value = " . $randArray[$minI] . "<br>";
