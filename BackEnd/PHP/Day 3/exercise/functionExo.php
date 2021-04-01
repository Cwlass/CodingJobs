<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

function multiply($a, $b)
{
    return $a * $b;
}

if (isset($_POST['multiply'])) {
    $value1 = $_POST["number1"];
    $value2 = $_POST["number2"];
    if (is_numeric($value1) && is_numeric($value2)) {
        echo multiply($value1, $value2);
    }
}


?>
<form action="" method="post">
    <input type="number" name="number1" id="">
    <input type="number" name="number2" id="">
    <input type="submit" value="Multiply" name="multiply">
</form>
<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

function checkSize($num1, $num2)
{
    if ($num1 > $num2) {
        echo "The first number is larger";
    }
    if ($num2 > $num1) {
        echo "The second number is larger";
    }
    if ($num1 === $num2) {
        echo "The numbers are identical";
    }
}


if (isset($_POST['sizeCheck'])) {
    $value1 = $_POST["num1"];
    $value2 = $_POST["num2"];
    if (is_numeric($value1) && is_numeric($value2)) {
        checkSize($value1, $value2);
    }
}
?>
<form action="" method="post">
    <input type="number" name="num1" id="">
    <input type="number" name="num2" id="">
    <input type="submit" value="find highest" name="sizeCheck">
</form>

<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

function expSum($expenses)
{
    $sum = 0;
    foreach ($expenses as $value) {
        $sum += $value;
    }
    return $sum . "$";
}


$expenses = array(15, 10, 25, 50, 750, 350);
echo "Johns expenses. <br><ol>";
foreach ($expenses as $key => $value) {
    echo "<li>" . $value . "</li>";
}
echo "</ol>";

echo "The sum is " . expSum($expenses);

?>




<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

function checkString($word)
{
    $reverse = "";
    for ($i = 0; $i < strlen($word); $i++) {
        $reverse = $word[$i] . $reverse;
    }


    if ($word == $reverse) {
        echo $word . " is a palindrome";
    } else {
        echo $word . " is not a paldindrome";
    }
}

if (isset($_POST['palindromeCheck'])) {
    $value1 = $_POST["word"];
    checkString($value1);
}

?>


<form action="" method="post">
    <input type="text" name="word" id="">
    <input type="submit" value="Check if Palindrome" name="palindromeCheck">
</form>

<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

function checkPrime($number)
{
    $isPrime = true;
    $i = 1;
    while ($isPrime and $i < $number) {
        if ($number % $i == 0 and $i <> $number and $i <> 1) {
            $isPrime = false;
        }
        $i++;
    }
    if ($isPrime) {
        echo $number . " is Prime";
    } else {
        echo $number . " is not prime";
    }
}

if (isset($_POST['primeCheck'])) {
    $number = $_POST["primeNum"];
    if (is_numeric($number)) {
        checkPrime($number);
    } else {
        echo $number . " is not a number";
    }
}
?>

<form action="" method="post">
    <input type="number" name="primeNum">
    <input type="submit" value="Check if prime" name="primeCheck">
</form>

<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

function htmlImg($src)
{
    echo "<img src ='" . $src . "'>";
}

if (isset($_POST["imgBtn"])) {
    $img = $_POST["img"];
    htmlImg($img);
}


?>

<form action="" method="post">
    <input type="text" name="img" id="" placeholder="img.png">
    <input type="submit" value="show img" name="imgBtn">
</form>

<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

function multiplyParam($num1 = 10, $num2 = 2)
{
    if (is_numeric($num1) && is_numeric($num2)) {
        return ($num1 * $num2);
    } else {
        echo $num1 . " or " . $num2 . " is not a number.";
    }
}


if (isset($_POST["ex7"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];


    if (empty($num1) && !empty($num2)) {
        echo multiplyParam($num2);
    }
    if (empty($num2) && !empty($num1)) {
        echo multiplyParam($num1);
    }
    if (!empty($num1) and !empty($num1)) {
        echo multiplyParam($num1, $num2);
    }
    if (empty($num1) && empty($num2)) {
        echo multiplyParam();
    }
}

?>

<form action="" method="post">
    <input type="number" name="num1" id="">
    <input type="number" name="num2" id="">
    <input type="submit" value=" Multiply" name="ex7">
</form>

<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';


function flipArray($array)
{
    $temp = 0;
    $length = count($array);

    for ($i = 0; $i < round($length / 2); $i++) {
        $temp = $array[$i];
        $array[$i] = $array[$length - $i - 1];
        $array[$length - $i - 1] = $temp;
    }

    return $array;
}



$table = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

for ($i = 0; $i < count($table); $i++) {
    echo $table[$i] . " ";
}
echo "<br>";

$table = flipArray($table);

for ($i = 0; $i < count($table); $i++) {
    echo $table[$i] . " ";
}



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9 </p>';

function countWords($text)
{
    $spaceCheck = 0;
    $checkBool = false;
    $wordCount = 0;

    if (strlen($text) > 0) {
        for ($i = 0; $i < strlen($text); $i++) {

            if ($text[$i] == " " || $i == 0) {
                $checkBool = true;
                $spaceCheck = $i + 1;

                if ($spaceCheck < strlen($text) - 1) {
                    while ($checkBool) {
                        if (isset($text[$spaceCheck])) {
                            if ($text[$spaceCheck] == " ") {
                                $checkBool = false;
                                $wordCount++;
                            } else {
                                $spaceCheck++;
                            }
                        } else {
                            $checkBool = false;
                        }
                    }
                }
            }
        }
    } else {
        $wordCount = 0;
    }
    return $wordCount;
}

if (isset($_POST["checkWords"])) {
    $word = $_POST["words"];
    echo "<br>";
    echo "There are " . countWords($word) . " words";
}


?>

<form action="" method="post">
    <input type="text" name="words">
    <input type="submit" value="Check words" name="checkWords">
</form>

<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

function countEachWords($text)
{
    $spaceCheck = 0;
    $checkBool = false;
    $wordCount = 0;
    $wordArray = [];
    $wordArray[0] = $text[0];


    for ($i = 0; $i < strlen($text); $i++) {

        if ($text[$i] == " " || $i == 0) {
            $checkBool = true;
            $spaceCheck = $i + 1;

            if ($spaceCheck < strlen($text) - 1) {
                while ($checkBool) {

                    if (isset($text[$spaceCheck])) {
                        if ($text[$spaceCheck] === " ") {
                            $checkBool = false;
                            $wordCount++;
                        } else {
                            $wordArray[$wordCount] = $wordArray[$wordCount] . $text[$spaceCheck];
                            $spaceCheck++;
                        }
                    } else {
                        $checkBool = false;
                    }
                }
            }
        }
    }

    var_dump($wordArray);

    $wordCountArray = [];

    for ($i = 0; $i < count($wordArray); $i++) {
        $wordCountArray[$wordArray[$i]] = 0;
        for ($j = 0; $j < count($wordArray); $j++) {
            if ($wordArray[$i] == $wordArray[$j]) {
                $wordCountArray[$wordArray[$i]]++;
            }
        }
    }
    return $wordCountArray;
}

if (isset($_POST["checkEachWords"])) {
    $word = $_POST["words"];
    echo "<br>";
    echo "<pre>";
    var_dump(countEachWords($word));
    echo "</pre>";
}
?>
<form action="" method="post">
    <input type="text" name="words">
    <input type="submit" value="Check words" name="checkEachWords">
</form>