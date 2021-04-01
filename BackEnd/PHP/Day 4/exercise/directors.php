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
        <a href="index.php"> Home</a>
    </header>
    <h1>All movies</h1>
    <section>
        <div class="imgCont">
            <?php
            include_once '../database.php';
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

            if ($conn) {
                $query = 'SELECT * FROM directors';

                $results = mysqli_query($conn, $query);

                $directors = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }

            // varDump($movies);
            ?>


            <?php foreach ($directors as $director) : ?>
                <div class="moviePoster">
                    <h2><?= $director["firstName"]; ?></h2>
                    <h2><?= $director["lastName"]; ?></h2>
                    <form action="director.php" method="get">
                        <input type="image" src="<?= $director["picture"]; ?>" alt="">
                        <input type="text" name="id" value="<?= $director["id"]; ?>">
                    </form>
                </div>
            <?php endforeach; ?>


        </div>
    </section>
</body>

</html>