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
    <?php
    include_once "nav.php";
    include_once 'database.php';
    session_start();
    $Errors = array();
    if (isset($_POST["register"])) {
        if (empty($_POST["username"])) {
            $Errors['username'] = "Username is required";
        }
        if (empty($_POST["email"])) {
            $Errors['email'] = "email is required";
        }
        if (empty($_POST["password"])) {
            $Errors['password'] = "password is required";
        }



        if (empty($Errors)) {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
            $compareQuery = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "'";
            $results = mysqli_query($conn, $compareQuery);
            $users = mysqli_fetch_all($results);
            if (mysqli_num_rows($results) <= 0) {
                $password = $_POST["password"];
                //$hash = md5($password);
                $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

                $query = 'INSERT INTO users (username, email, password) VALUES ("' . $_POST["username"] . '" , "' . $_POST["email"] . '","' . $hashedpassword . '")';

                if ($conn->query($query) === TRUE) {
                    //echo "New record created successfully";
                    header('location: login.php');
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "<h1>That user or email is already in use<h1>";
            }
        } else {
            echo "<h2> All fields must be filled</h2>";
        }
    }

    ?>

    <body>
        <div class="login">
            <h1>Register your account</h1>
            <form action="" method="POST">
                <input type="text" name="firstname" placeholder="First Name">
                <?php if (isset($Errors["firstname"])) echo $Errors["firstname"]; ?>

                <input type="text" name="lastname" id="" placeholder="Last Name">

                <input type="text" name="email" placeholder="email">
                <?php if (isset($Errors["email"])) echo $Errors["email"]; ?>

                <input type="text" name="password" placeholder="password">
                <?php if (isset($Errors["username"])) echo $Errors["username"]; ?>

                <input type="submit" value="register" name="register">
            </form>
        </div>
    </body>

</html>