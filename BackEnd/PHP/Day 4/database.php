<?php

//define some constant
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'moviedb');


$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

function varDump($dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
}
