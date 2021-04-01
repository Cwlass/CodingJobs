<?php
$imgUrl = "barbarian.ico";
$name = "Jöhrm";
$lastName = "Big Man";
$stats = ["attack" => 15, "defense" => 9, "special" => "Rage"];
echo '<div style="text-align : center; background-color : grey; width : 500px; margin : auto; border-radius : 30px;">';
echo '<img src="' . $imgUrl . '"> <br>';
echo '<h1> Name : ' . $name . "</h1> <br>";
echo '<h2> Sirname : ' . $lastName . "</h2> <br>";
echo '<p> Attack : ' . $stats["attack"] . '</p> <br>';
echo '<p> Defense : ' . $stats["defense"] . '</p> <br>';
echo '<p> Special : ' . $stats["special"] . '</p> <br>';
if ($stats["attack"] > 9 or $stats["attack"] > 9) {
    echo '<div class="alert">
    <strong>Congratulations !</strong> Your character is ready to fight.</strong>
</div>';
}
if ($stats["attack"] < 5 or $stats["attack"] < 5)
    echo '        <div class="alert">
    <strong>Wait !</strong> Your charachter is too weeeakk!
</div>';
/*---------------------------------------*/
