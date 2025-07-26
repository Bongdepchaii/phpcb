<?php

$chuoi = "Xin chao, chao mung ban den voi PHP!";

$chuoichuhoa = strtoupper($chuoi);
echo "CHU HOA " .  $chuoichuhoa . "<br>";

$chuoichuthuong = strtolower($chuoi);
echo "chu thuong" . $chuoichuthuong . "<br>";

$thaythechuoi = str_replace ("PHP!" , "C++!" , $chuoi);
echo "thay the chuoi " . $thaythechuoi . "<br>";

$tachchuoi = explode(" " , $chuoi);
echo "tach chuoi thanh mang: ";

print_r($tachchuoi);

?>