<?php
session_start();

$i = 1;
$search = "";

$product = [
  ["iPhone 13 Pro max", 12980000, 12, "Dien thoai"],
  ["dell latitude 5401", 12980000, 32, "Lap top"],
  ["iPhone 7 Plus", 2800000, 47, "Dien thoai"],
  ["iPad Air 5", 10980000, 16, "May tinh bang"],
  ["Samsung s22 ultra", 9800000, 22, "Dien thoai"],
];

// $price = $product[1];
// $sale = 0;
// $kq [];

if(isset($_GET['check']) && isset($_GET['search'])){
    $search = strtolower(trim($_GET['search']));
    $kq = [];

foreach ($product as $item){
    if(
        strpos(strtolower($item[0]), $search) !== false ||
        strpos(strtolower($item[1]), $search) !== false ){
        $kq[] = $item;
}
}
$product = $kq;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>product</title>
</head>

<body>
  <div class="container">
    <div style="margin-bottom: 15px; margin-top: 15px">

      <?php
      if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        echo "Hello, $user <a href='dangxuat.php'>Logout</a>";
      }
      ?>
    </div>
    <form action="product.php" method="get">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Enter name product">
        <button class="btn btn-outline-secondary" type="submit" name="check" id="button-addon2">Search</button>
      </div>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Stock</th>
          <th scope="col">Category</th>
          <th scope="col">Sale</th>
          <th scope="col">Price after sale</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($product as $item): ?>
          <?php
          if (isset($product) && isset($item[1])) {
            if ($item[1] >= 5000000) {
              $sale = $item[1] * 0.15;
            } else if ($item[1] >= 2000000) {
              $sale = $item[1] * 0.1;
            } else if ($item[1] < 2000000) {
              $sale = $item[1] * 0.95;
            }
          }
          ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?php echo $item[0]  ?></td>
            <td><?php echo $item[1]  ?></td>
            <td><?php echo $item[2]  ?></td>
            <td><?php echo $item[3]  ?></td>
            <td><?php echo $sale  ?></td>
            <td><?php echo $item[1] -= $sale  ?></td>
          </tr>
        <?php endforeach; ?>
    </table>
  </div>

</body>

</html>