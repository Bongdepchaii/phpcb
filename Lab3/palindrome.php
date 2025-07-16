<?php

function Ktrachuoidoixung ($string){
    $string = strtolower(str_replace(" ", " ", $string));
    return $string == strrev($string);
}

echo Ktrachuoidoixung ("Madam da la dam")? " Madam da la Madam la tu doi xun " : " Madam la la Madam khong phai la tu doi xung " . "<br>";
echo Ktrachuoidoixung (" Hello ")? " Hello la tu doi xung" : " Hello khong phai la tu doi xung" . "<br>";
echo Ktrachuoidoixung ("A man a plan a canal Panama")? " Chuoi nay la tu doi xung" : " Chuoi nay khong phai la tu doi xung" . "<br>";

?>