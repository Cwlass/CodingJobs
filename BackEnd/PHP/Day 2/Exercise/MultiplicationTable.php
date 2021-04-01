<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication tables</title>
    <style>
        div {
            column-count: 2;
            column-rule: solid;
        }

        section {
            width: 600px;
            border-radius: 30px;
            margin: 100px auto;
            text-align: center;
            background-color: #E5E5E5;
            color: black;
            padding: 15px;
        }

        form input {
            border-radius: 12px;
            border: none;
            margin: 15px;
        }

        input[type=text] {
            padding: 10px;
        }

        input[type=submit] {
            padding: 10px;
            box-shadow: 0px 8px 15px;
            background-color: white;
            width: 100px;
        }

        input[type=submit]:active {
            box-shadow: none;
            transform: translateY(4px);
        }

        p {
            margin-top: 0;
        }

        body {
            background-color: #000122;
            ;
        }
    </style>
</head>

<body>
    <section>
        <form action="" method="$_GET">
            <input type="text" name="number" placeholder="Multiplier : Default 2">
            <input type="submit" value="Go">
        </form>

        <?php

        if (!empty($_GET["number"])) {
            $multiplier = $_GET["number"];
        } else {
            $multiplier = 2;
        }

        $table = [];
        if (is_numeric($multiplier)) {
            for ($i = 1; $i < 11; $i++) {
                $table[] = $i * $multiplier;
            }


            echo "<div>";
            for ($i = 0; $i < 10; $i++) {
                echo "<p>" . $table[$i] . "</p>";
            }
            echo "</div>";
        } else {
            echo "<h1>" . $multiplier . " is not a number.</h1>";
        }
        ?>
    </section>
</body>

</html>