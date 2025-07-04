<?php

define("MAX_VALUE", 100);
$number = array(10, 20, 100, 30, 20, 250, 30, 60);
$sum = 0;

foreach ($number as $nb) {
    if ($nb > MAX_VALUE) {
        continue;
    }
    $sum += $nb;
}

echo " sum cac gia tri nho hon hoac bang " . MAX_VALUE . " la: " . $sum;
?>
