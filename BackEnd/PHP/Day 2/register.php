<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_POST)) {
        $email = trim($_POST['email']);
        $email = htmlspecialchars($email);
        $sanitiseEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitiseEmail, FILTER_VALIDATE_EMAIL)) {
            echo 'Mail valid ! YouHou';
            echo "<p>your email is " . $sanitiseEmail . "<p>";
        } else {
            echo 'Email is not valid!';
        }
    } else {
        echo "FuuuUUCK off";
    }
    ?>
</body>

</html>