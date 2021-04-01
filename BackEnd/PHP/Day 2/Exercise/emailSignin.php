<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>

<body>
    <?php
    if (!empty($_GET)) {
        $email = $_GET["email"];
        $password = $_GET["password"];
        if (strpos($email, '@') <> false) {
            echo "<p style ='color : green;'> Valid email</p>";
        } else {
            echo "<p style ='color : red;'> Invalid email</p>";
        }
    }
    ?>


    <form action="" method="$_GET">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Go">
    </form>
</body>

</html>