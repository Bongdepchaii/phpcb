<?php
session_start();

if (!isset($_GET['id'])) {
    echo "ERROR!! loi sp";
    exit;
}

$idsp = $_GET['id'];
$productlist = $_SESSION['product'] ?? [];
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $masp = $_POST['masp'] ?? '';
    $loaisp = $_POST['loaisp'] ?? '';
    $tensp = $_POST['tensp'] ?? '';
    $thietbi = $_POST['thietbi'] ?? '';
    $gia = $_POST['gia'] ?? '';
    $img = $_FILES['img']['name'] ?? '';

    if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
        $uploadDir = 'Uploads/';

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadDir . $img);
    } else {
        foreach ($productlist as $item) {
                if (isset($item['masp']) && $item['masp'] == $idsp) {
                $img = $item['img'];
                break;
            }
        }
    }

    foreach ($productlist as $index => $item) {
                 if (isset($item['masp']) && $item['masp'] == $idsp) {
            $_SESSION['product'][$index] = [
                'masp' => $masp,
                'loaisp' => $loaisp,
                'tensp' => $tensp,
                'thietbi' => $thietbi,
                'gia' => $gia,
                'img' => $img,
            ];
            header ('location:list-product.php');
            exit();
        }
    }

    $productlist = $_SESSION['product'];
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
        <?php foreach ($productlist as $item): ?>
            <?php if (isset($item['masp']) && $item['masp'] == $idsp) { ?>
                <h2 style="color: green;">Edit product</h2>
                <form id="loginForm" action="edit-product.php?id=<?php echo $item['masp'] ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input style="margin-bottom: 15px;" type="text" name="masp" class="form-control" value="<?php echo $item['masp'] ?>" />
                        <input style="margin-bottom: 15px;" type="text" name="loaisp" class="form-control" value="<?php echo $item['loaisp'] ?>" />
                        <input style="margin-bottom: 15px;" type="text" name="tensp" class="form-control" value="<?php echo $item['tensp'] ?>" />
                        <input style="margin-bottom: 15px;" type="text" name="thietbi" class="form-control" value="<?php echo $item['thietbi'] ?>" />
                        <input style="margin-bottom: 15px;" type="text" name="gia" class="form-control" value="<?php echo $item['gia'] ?>" />
                        <input style="margin-bottom: 15px;" type="file" name="img" class="form-control" />
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="d-grid">
                        <button style="background-color: blue; padding: 15px 0px" type="submit" class="btn btn-primary">Edit lai</button>
                        <?php
                        echo  $message; ?>
                    </div>
                    <div class="form-text text-center mt-3">
                        <a style="color: blue" href="list-product.php">Back list product</a> · <a href="#"></a>
                    </div>
                </form>
            <?php break;
            } ?>
        <?php endforeach; ?>
    </div>
</body>

</html>