<?php
// them san pham moi
$products = [];
function addProduct(&$products, $id, $name, $price) {
    array_push($products, ['id' => $id, 'name' => $name, 'price' => $price]);
}

// Xoa san pham theo id
function removeProductById(&$products, $id) {
    foreach ($products as $key => $product) {
        if ($product['id'] == $id) {
            unset($products[$key]);
            break;
        }
    }
    $products = array_values($products); // Dat lai cac khoa mang

    // echo '<pre>';
    // print_r($products); // Xem ket qua sau khi dat lai
}

// Tim san pham theo name
function findProductByName($products, $name) {
    foreach ($products as $product) {
        if ($product['name'] == $name) {
            return $product;
        }
    }
    return null;
}

// Tra ve danh sach san pham co price lon hon gia tri cho truoc
function getProductsByPrice($products, $price) {
    $result = [];
    foreach ($products as $product) {
        if ($product['price'] > $price) {
            array_push($result, $product);
        }
    }
    return $result;
}

// Tra ve danh sach name cua san pham
function getProductNames($products) {

    // Cach 1:
    $names = [];
    foreach ($products as $product) {
        array_push($names, $product['name']);
    }

    // Cach 2:
    $names = array_column($products, 'name');

    return $names;
}

// Thu nghiem cac ham
echo '<pre>';

addProduct($products, 1, "Product 1", 100);
addProduct($products, 2, "Product 2", 200);
addProduct($products, 3, "Product 3", 150);
addProduct($products, 4, "Product 4", 250);

print_r($products);

removeProductById($products, 2);
print_r($products);

$product = findProductByName($products, "Product 3");
print_r($product);

$expensiveProducts = getProductsByPrice($products, 150);
print_r($expensiveProducts);

$productNames = getProductNames($products);
print_r($productNames);


?>