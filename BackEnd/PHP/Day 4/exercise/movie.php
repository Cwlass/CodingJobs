<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="index.php">Home</a>
        <a href="movies.php">Movies</a>
    </header>
    <section>
        <div class="imgCont">
            <?php
            include_once '../database.php';
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

            if ($conn) {
                $query = 'SELECT * FROM movies INNER JOIN directors ON director_id = directors.id WHERE movies.id = ' . $_GET["id"];
                //echo $query . "<br>";
                $results = mysqli_query($conn, $query);

                $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }

            /*foreach ($movies as $value) {
                if ($value["id"] == $_GET["id"]) {
                    $targetFilm = $value;
                }
            }*/
            //echo "<img src='" . $movies[0]["poster"] . "'/>";
            ?>
            <?php foreach ($movies as $movie) : ?>
                <div class="movieDetails">
                    <div class="directorL">
                        <h2><?= $movie["Title"]; ?></h2>
                        <img src="<?= $movie['poster']; ?>" alt="">
                    </div>
                    <div>
                        <p>First screening : <?= substr($movie["date_of_release"], 0, 4); ?></p>
                        <p>Directed by : <?= $movie["firstName"]; ?> <?= $movie["lastName"]; ?> </p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</body>

</html>