<?php
session_start();
$product = $_SESSION['product'] ? $_SESSION["product"] : [];
//  search
if(isset($_GET['check']) && isset($_GET['search'])){
$search = strtolower(trim($_GET['search']));
$kq = [];

foreach ($product as $item){
  if(
    strpos(strtolower($item['tensp']), $search) !== false || 
    strpos(strtolower($item['loaisp']), $search) !== false){
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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>List</title>
</head>
<body>
            <center>
    <div class="container" style="max-width: 1100px; font-size: 0.8rem;">
            <h1 style="margin: 15px 0px; font-size: 2rem;">List product</h1>
    <a style="margin-bottom: 15px;" class="btn btn-primary" href="addproduct.php">Add san pham</a>
    <!-- <a style="margin-bottom: 15px;" class="btn btn-danger" href="delete.php">Delete all list san pham</a> -->
    <form action="listproduct.php" method='get'>
        <div class="input-group mb-3">
               <form action="" method="get">
                 <input type="text" class="form-control" name="search" placeholder="Search ten san pham"  aria-describedby="button-addon2">
                 <button name="check" class="btn btn-outline-success" type="submit" id="button-addon2">Tim kiem</button>
               </form>
</form>
</div>
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Ma san pham</th>
      <th scope="col">Loai san pham</th>
      <th scope="col">Ten san pham</th>
      <th scope="col">Thiet bi</th>
      <th scope="col">Gia ban</th>
      <th scope="col">Hinh anh</th>
      <th scope="col">Sua</th>
      <th scope="col">Xoa</th>
      <th scope="col">Xem chi tiet</th>
    </tr>
  </thead>

  <tbody>
      <?php
        foreach ($product as $item):
        ?>
    <tr>
      <td><?php echo $item['masp'] ?></td>
      <td><?php echo $item['loaisp'] ?></td>
      <td><?php echo $item['tensp'] ?></td>
      <td><?php echo $item['thietbi'] ?></td>
      <td><?php echo $item['gia'] ?></td>
      <td>    <img src="Uploads/<?php echo $item['img'] ?>" alt="img" width="60" height="60"></td>
      <td><a style="font-size: 0.9rem;" class="btn btn-light" href="editproduct.php?id=<?= $item['masp'] ?>">Sua</a></td>
      <td><a style="font-size: 0.9rem;" class="btn btn-danger" href="delete-product.php?id=<?= $item['masp'] ?> ">Xoa</a></td>
      <td><a style="font-size: 0.9rem;" class="btn btn-info" href="product-detail.php?id=<?= $item['masp'] ?>">Xem chi tiet</a></td>
    </tr>
    <?php endforeach; ?> 
  </tbody>
</table>
    </div>

</center>

</body>
</html>

