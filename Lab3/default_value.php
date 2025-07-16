<?php

$xinchao = "Xin chao";

function User($ten = "Thanh"){
    $chaomung = "chao mung";

    global $xinchao;

    return "$xinchao, $ten $chaomung ban den voi website nay!";
}

echo User() . "<br>"; 
echo User("Bong") . "<br>"; 
