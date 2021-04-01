<?php

/*
- Exercise 1 :
	1. Create an HTML form with two textbox (first and last name) and a 'submit' button.
	When the 'submit' button is clicked, display the full name of the person.
	Do not worry about what's in the textbox once the button is clicked.

	2.Now, display the first and last name in the textbox, even after the button is clicked.

	3. Suppose our site has only 5 authorized users.
	These users are contained in a table.
	For example: $users = array ("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");
	Check if the user, who enters his data, is one of the 5 users and display a suitable message.

		> Step 1: Create a PHP script that browses an array and checks whether a string is there (use a loop and a logical condition).
	    
	    > Step 2: Use step 1 to check if an user is allow

- Exercise 2 :
	1. Create an HTML form with one input (date picker) and a 'submit' button.
	When the 'submit' button is clicked, display the difference (in timestamp) between the date of today and the date in the input.
	Do not worry about what's in the input once the button is clicked.
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Exercise 1</title>
</head>

<body>

    <?php
    $fName = "";
    $lName = "";
    $users = ["johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john"];
    if (!empty($_POST)) {
        $fName = $_POST["firstname"];
        $lName = $_POST["lastname"];
        $fullName = $fName . " " . $lName;
        foreach ($users as $value) {
            if ($fullName == $value) {
                switch ($value) {
                    case "johnny hallyday":
                        echo '<h2>ALLUMEZ LE FEU!!!!</h2>';
                        break;
                    case 'simon bertrand':
                        echo '<h2>LISTEN TO ME! ZIS IZ VERY IMPORTANT.</h2>';
                        break;
                    case "tom hanks":
                        echo '<h2>WILSOOOOON</h2>';
                        break;
                    default:
                        echo 'welcome ' . $value;
                        break;
                }
            }
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="firstname" placeholder="First Name" value='<?php echo $fName; ?>'>
        <input type="text" name="lastname" placeholder="Last Name" value='<?php echo $lName; ?>'>
        <input type="submit" name="submit">
    </form>

    <form action="" method="get">
        <input type="date" name="date" id="">
        <input type="submit" value="Get time">
    </form>

    <?php
    if (!empty($_GET)) {
        $date = $_GET["date"];
        $timestap = strtotime($date);
        $now = strtotime("now");

          
        $timeDiff = $now - $timestap;
        $timeDiff = $timeDiff / 60;
        $timeDiff = round($timeDiff);
        echo 'that was ' . $timeDiff .  ' minutes ago, ';
        $timeDiff = $timeDiff / 60;
        $timeDiff = round($timeDiff);
        echo $timeDiff .  ' hours ago or ';
        $timeDiff = $timeDiff / 24;
        $timeDiff = round($timeDiff);
        echo $timeDiff .  ' days.';
    }
    ?>

</body>

</html>