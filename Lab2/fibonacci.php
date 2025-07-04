<?php
define("FIB_COUNT", 15);
define("CHECK_DIVISOR", 7);

$fib = [0, 1];
$i = 2;

do{
    $nextFib = $fib[$i - 1] + $fib [$i -2];
    $fib[] = $nextFib;

    if($nextFib % CHECK_DIVISOR == 0){
    echo "So Fibonacci dau tien chia het cho " . CHECK_DIVISOR . " la: " . $nextFib;
    break;
}
    $i++;
} while ($i < FIB_COUNT);
if ($i >= FIB_COUNT){
    echo "Khong co so Fibonacci nao trong ". FIB_COUNT . " so dau tien chia het cho " . CHECK_DIVISOR;
}
?>