<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <?php
    $firstName = "";
    $sirName = "";
    $email = "";
    $password = "";
    $passConf = "";
    $checkBox = "";

    if (!empty($_GET)) {
        $firstName = $_GET["firstName"];
        $sirName = $_GET["lastName"];
        $email = $_GET["email"];
        $password = $_GET["passWord"];
        $passConf = $_GET["confpassWord"];
        if (isset($_GET["newsletter"])) {
            $checkBox = $_GET["newsletter"];
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) && $password == $passConf && strlen($password) > 8  && !empty($firstName) && !empty($sirName) && (strlen($email) > 8 && strlen($email) < 50)) {
            echo 'Welcome, ' . $firstName . ' ' . $sirName . "<br> your email is " . $email;
        } else {
            echo '<p>Form incomplete</p>';
            echo "<a href='http://localhost/CodingJobs/php/Day%202/Exercise/signin.php'>Return</a>";
        }
    }

    ?>



    <form action="" method="GET">
        <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName ?>">
        <br>
        <input type="text" name="lastName" placeholder="Sirname" value="<?php echo $sirName ?>">
        <br>
        <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>">
        <br>
        <input type="password" name="passWord" placeholder="Password" value="<?php echo $password ?>">
        <br>
        <input type="password" name="confpassWord" placeholder="Confirm Password" value="<?php echo $passConf ?>">
        <br>
        <input type="checkbox" name="newsletter" require>
        <label for="newletter">Subscribe to newsletter</label>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>