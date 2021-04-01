<?php

//Connect to DB
include_once 'database.php';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

/*echo '<pre>';
var_dump($conn);
echo '</pre>';*/

//Check Connection

if ($conn) {
    //prepare my query
    $query = 'SELECT * FROM movies';

    $results = mysqli_query($conn, $query);

    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
    varDump($movies);
    mysqli_close($conn);
} else {
    echo 'Probleme connecting to the database';
}
