<?php
session_start();

if (!isset($_GET['id'])) {
    echo "Thiếu mã sản phẩm để xoá!";
    exit;
}

$masp = $_GET['id'];
$productList = $_SESSION['product'];

foreach ($productList as $index => $item) {
    if ($item['masp'] == $masp) {
        unset($productList[$index]);
        $_SESSION['product'] = array_values($productList); 
        break;
    }
}

header("Location: listproduct.php");
exit;
