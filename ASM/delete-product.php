<?php
session_start();

if (!isset($_GET['id'])) {
    echo "Khong co san pham de xoa!";
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
header("Location: list-product.php");
exit;
