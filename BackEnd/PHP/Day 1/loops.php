<?php
$a = 0;
while ($a < 10) {
    echo 'I\'M STUCK IN A LOOOOOOP <br>';
    $a += 1;
};


for ($i = 0; $i < 10; $i++) {
    echo 'NOOOOO not another loops <br>';
};

$b = 0;


function recursive($var)
{
    echo 'this is an recursive loop <br>';
    $c = $var;
    $c++;
    if ($c < 10) {
        recursive($c);
    };
};

recursive($b);
