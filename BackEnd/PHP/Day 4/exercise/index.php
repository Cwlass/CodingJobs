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
        <a href="movies.php"> All movies</a>
        <a href="directors.php"> All directors</a>
    </header>
    <h1>Top Films of this year:</h1>
    <section>
        <div class="imgCont">
            <?php
            include_once '../database.php';
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

            if ($conn) {
                $query = 'SELECT * FROM movies ORDER BY date_of_release DESC LIMIT 3';

                $results = mysqli_query($conn, $query);

                $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }

            // varDump($movies);
            ?>


            <?php foreach ($movies as $movie) : ?>
                <div class="moviePoster">
                    <h2><?= $movie["Title"]; ?></h2>
                    <img src="<?= $movie["poster"]; ?>" alt=" film poster">
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</body>

</html>