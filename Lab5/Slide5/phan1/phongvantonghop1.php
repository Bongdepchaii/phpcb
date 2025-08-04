<?php
// Bai tap phong van tong hop 1
function baitapphongvan1($str){
    $trimmed = trim($str);
    $uppercased =  strtoupper($trimmed);
    $replaced = str_replace("PHP", "PHP Programing", "uppercased");
    return strlen($replaced);
}
// Test
echo baitapphongvan1("  Welcome to PHP!!  ");
echo "</br>";
?>