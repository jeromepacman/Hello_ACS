<?php

$yes = true;
$prenom = 'John';
$age = 18;
$color = ['blue', 'red', 'yellom'];
$i = 1;

while ($i<3){

    if ($age>=18){
        echo "my name is $prenom, i'm $age & i like $color[0]";
    }
    else {
        echo "I'm less than 18 & i like $color[1]";
    }

    $i++;
    $age = 15;
    echo "\n";
}


