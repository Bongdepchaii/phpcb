<?php

function tinhtongvakq($So, $default = 0) {

    if (empty($So)) {
        return array('sum' => $default, 'average' => $default);
    }

    $Tong = array_sum($So);

    $trungbinh = $Tong / count($So);

    return array('sum' => $Tong, 'average' => $trungbinh);
}

$So1 = [1, 2, 3, 4, 5];
$So2 = [10, 20, 30, 40, 50];
$So3 = []; 

$kq1 = tinhtongvakq($So1);
echo "Tong: " . $kq1['sum'] . ", Trung binh: " . $kq1['average'] . "<br>";

$kq2 = tinhtongvakq($So2);
echo "Tong: " . $kq2['sum'] . ", Trung binh: " . $kq2['average'] . "<br>";

$kq3 = tinhtongvakq($So3, 5);
echo "Tong: " . $kq3['sum'] . ", Trung binh: " . $kq3['average'] . "<br>";
