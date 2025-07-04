<?php

define("PRIME_COUNT", 10);

$primes = array();
$num = 2;

// Khi su dung vong lap while de tim so nguyen to
while (count($primes) < PRIME_COUNT){
    $isPrime = true; 

    for ($i = 2; $i <= sqrt($num); $i++){
        if($num % 2 == 0){
            $isPrime = false;
            break;
        }
    }
    if ($isPrime){
        $primes[] = $num;
    }

    $num++;
}

echo "cac so nguyen to dau tien la: " . implode(", ", $primes);

?>