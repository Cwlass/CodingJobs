<?php
$var = 5;
echo $var;
function hello_world()
{
    echo "Hello World! </br>";
}

hello_world();

function acceptWorld()
{
    return "Welcome world! </br>";
}

echo acceptWorld();


function forLoop($i, $max)
{
    echo $i . " </br>";
    $i++;
    if ($i < $max) {
        forLoop($i, $max);
    }
}

forLoop(0, 10);
