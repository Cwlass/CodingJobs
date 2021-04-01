<?php
echo "EXERCISE 1 : <br> <br>";

for ($i = 0; $i < 5; $i++) {

    for ($j = 0; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}


/*for ($i = 0; $i < 1; $i++) {
    for ($j = 0; $j < 1; $j++) {
        echo "* <br>";
        echo "* * <br>";
        echo "* * * <br>";
        echo "* * * * <br>";
        echo "* * * * * <br>";
    }
}*/




echo "<br>";
echo "<br>";

/*----------------------------------*/

echo "EXERCISE 2 : <br> <br>";
for ($i = 0; $i <  10; $i++) {
    if ($i <= 4) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
    } else {
        for ($j = 0; $j < (10 - $i); $j++) {
            echo "* ";
        }
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

/*---------------------------------*/

echo "EXERCISE 3 : <br> <br>";
$artists = array(
    0 => array("Eminem", "IAM"),
    1 => array("Madonna", "Katy Perry"),
    2 => array("Pink Floyd", "AC/DC")
);

$style = array(
    0 => "Rap",
    1 => "Pop",
    2 => "Rock"
);

$array3 = [];

foreach ($style as $key => $value) {
    $array3[$value] = $artists[$key];
}

echo "<pre>";
var_dump($array3);
echo "</pre> <br>";

echo "<br>";
echo "<br>";

/*----------------------------------*/

echo "EXERCISE 4 : <br> <br>";

$transactions = array(
    "Marie" => array(
        "debit" => 6,
        "credit" => 9
    ),
    "Julien" => array(
        "debit" => 21,
        "credit" => 19
    ),
    "Sophie" => array(
        "debit" => 15,
        "credit" => 14
    ),
    "John" => array(
        "debit" => 10,
        "credit" => 14
    )
);

foreach ($transactions as $key => $value) {
    $amount = $value["credit"] - $value["debit"];
    $transactions[$key]["amount"] = $amount;
}

echo "<pre>";
var_dump($transactions);
echo "</pre> <br>";

echo "<br>";
echo "<br>";
/*----------------------------------------*/
echo "EXERCISE 5 : <br> <br>";

/*NUMBER GENERATOR*/
$numbers = [];
$max = 69;
for ($i = 1; $i <= $max - 1; $i++) {
    $isUnique = false;
    $temp = rand(1, $max);
    while (!$isUnique) {
        if (!in_array($temp, $numbers)) {
            $isUnique = true;
        } else {
            $temp = rand(1, $max);
        }
    }
    $numbers[] = $temp;
}

/*LOGIC*/

$var = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $var += $numbers[$i];
}

$var = (($max / 2) * (1 + $max)) - $var;



/*DISPLAY*/

foreach ($numbers as $value) {
    echo $value . " ";
}
echo "<br>";


echo "Missing number is: " . $var;
