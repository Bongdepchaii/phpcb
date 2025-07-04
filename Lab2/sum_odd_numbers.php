<?php

define("LIMIT", 50);

$sum = 0;

for($i = 1; $i <= LIMIT; $i++){
    if($i % 2 == 0){
        continue; 
    }
    $sum += $i;
} 

echo "Tong cac so le tu 1 den " . LIMIT . " la :" . $sum;


?>