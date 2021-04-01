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
        <a href="directors.php">Directors</a>
    </header>
    <section>
        <div class="imgCont">
            <?php
            include_once '../database.php';
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

            if ($conn) {
                $query = 'SELECT * FROM movies INNER JOIN directors ON director_id = directors.id WHERE director_id= ' . $_GET["id"];
                //echo $query . "<br>";
                $results = mysqli_query($conn, $query);

                $directors = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }

            /*foreach ($movies as $value) {
                if ($value["id"] == $_GET["id"]) {
                    $targetFilm = $value;
                }
            }*/
            //echo "<img src='" . $movies[0]["poster"] . "'/>";
            echo "<div class='directorL'>";
            echo "<h2>" . $directors[0]["firstName"] . "</h2>";
            echo "<h2>" . $directors[0]["lastName"] . "</h2>";
            echo "<img src='" . $directors[0]["picture"] . "'>";
            echo "</div>";
            ?>
            <?php foreach ($directors as $director) : ?>
                <div class="moviePoster">
                    <h2><?= $director["Title"]; ?></h2>
                    <h2><?= $director["date_of_release"]; ?></h2>
                    <img src="<?= $director["poster"]; ?>">
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</body>

</html>