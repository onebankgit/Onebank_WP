<?php

$db_pass = '';

function genPass() {
    $p = '';

    srand(1727649597);
    //randomizing ! 
    rand(0, 20);
    rand(0, 100);

    //more random stuff
    $x = rand(0,9000);

    $charset = "abcdefghijklmnopqrstuvwxyzABDEFGHIJKLMNOPQRSTUVWXYZ098765421";

    $y = $charset[rand(0, 30)];
    $z = $charset[rand(0, 10)];
    
    $p = hash('sha256', $x . $y . $z);

    return $p;
  }
  
$db_pass = genPass();


?>