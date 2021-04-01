<?php

//Connect to DB
include_once 'database.php';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);


//Check Connection

if ($conn) {
    //prepare my query
    $query = 'INSERT INTO movies(Title, date_of_release, poster, director_id)VALUES ("Indianna Jones 2 ", "1992-05-20"," ",64)';

    $results = mysqli_query($conn, $query);


    if ($results == true) {
        echo 'inserted';
    } else {
        echo 'probleme inserting';
    }

    mysqli_close($conn);
} else {
    echo 'Probleme connecting to the database';
}
