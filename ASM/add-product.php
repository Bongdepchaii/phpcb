<?php
session_start();

$message = "";

if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
  $masp = $_POST['masp'] ?? '';
  $loaisp = $_POST['loaisp'] ?? '';
  $tensp = $_POST['tensp'] ?? '';
  $thietbi = $_POST['thietbi'] ?? '';
  $gia = $_POST['gia'] ?? '';
  $img = $_FILES['img']['name'] ?? '';

  $product = [
    'masp' => $masp,
    'loaisp' => $loaisp,
    'tensp' => $tensp,
    'thietbi' => $thietbi,
    'gia' => $gia,
    'img' => $img,
  ];

  if (!isset($_SESSION['product'])) {
    $_SESSION['product'] = [];
  }

  $_SESSION['product'][] = $product;

  if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
    $addfile = 'Uploads/';
    if (!file_exists($addfile)) {
      mkdir($addfile, 077, true);
    }
    move_uploaded_file($_FILES['img']['tmp_name'], $addfile . $img);
  }
  $message = "<br/><div class='alert alert-info'>Them san pham thanh cong!!!</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto&display=swap" rel="stylesheet" />
  <link href="shared.css" rel="stylesheet" />
</head>

<body>
  <div class="auth-container" style="max-width: 1100px;">
    <h2 style="color: blue;">Add product</h2>
    <form id="loginForm" action="add-product.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <input style="margin-bottom: 15px;" type="text" name="masp" class="form-control" placeholder="Ma san pham" />
        <input style="margin-bottom: 15px;" type="text" name="loaisp" class="form-control" placeholder="Loai san pham" />
        <input style="margin-bottom: 15px;" type="text" name="tensp" class="form-control" placeholder="Ten san pham" />
        <input style="margin-bottom: 15px;" type="text" name="thietbi" class="form-control" placeholder="Thiet bi" />
        <input style="margin-bottom: 15px;" type="text" name="gia" class="form-control" placeholder="Gia ban" />
        <input style="margin-bottom: 15px;" type="file" name="img" class="form-control" placeholder="Hinh anh" />
      </div>
      <div class="mb-3">
      </div>
      <div class="d-grid">
        <button style="background-color: green; padding: 15px 0px" type="submit" class="btn btn-primary">Them san pham</button>
        <?php
        echo  $message; ?>
      </div>
      <div class="form-text text-center mt-3">
        <a style="color: blue" href="list-product.php">Back list product</a> · <a href="#"></a>
      </div>
    </form>
  </div>
</body>

</html>