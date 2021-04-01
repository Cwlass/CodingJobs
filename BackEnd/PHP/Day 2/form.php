<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $firstName = "";
    $lastName = "";
    if (!empty($_GET)) {
        $firstName = $_GET['firstName'];
        $lastName = $_GET['lastName'];
        echo 'Welcome, ' . $_GET['firstName'];
    }

    ?>
    <form action="" method="GET">
        <input type="text" name="firstName" placeholder="Please enter your first name" value="<?php echo $firstName ?>">
        <br>
        <input type="text" name="lastName" placeholder="Please enter your last name" value="<?php echo $lastName ?>">
        <br>
        <input type="submit" value="SEND">
    </form>

    <form action="register.php" method="POST">
        <input type="email" name="email" placeholder="Please enter your email">
        <br>
        <input type="password" name="password" placeholder="*************">
        <br>
        <input type="submit" value="SEND">
    </form>

</body>

</html>