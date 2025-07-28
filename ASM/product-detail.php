<?php
session_start();

if(!isset($_GET['id'])){
  echo "khong thay sp";
  exit;
}
$masp = $_GET['id'];
$productlist = $_SESSION['product'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Product Detail | iPhone 15 Pro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto&display=swap" rel="stylesheet" />
  <style>
    body { background: #f8f9fa; font-family: 'Roboto', Arial, sans-serif; }
    .menu { background: #fff; padding: 1.2rem 1rem; border-radius: 1rem; margin-bottom: 2rem; }
    .menu a { font-family: 'Playfair Display',serif; margin-right: 1.5rem; font-weight: 500; color: #0d6efd; text-decoration: none;}
    .menu a.active, .menu a:hover { color: #fff; background: #0d6efd; border-radius: 6px; padding: 0.25rem 0.75rem; }
    .product-detail-card { background: #fff; border-radius: 1rem; box-shadow: 0 2px 12px #0002; padding: 2.5rem 2rem 2rem 2rem; }
    .product-title { font-family: 'Playfair Display', serif; font-size: 2.1rem; font-weight: 700; }
    .product-category { font-size: 1.05rem; color: #6c757d; }
    .product-desc { margin: 1.25rem 0 1.5rem 0; color: #333; }
    .product-img-sticky { position: sticky; top: 90px; }
    .product-img { width: 100%; max-width: 370px; height: 270px; object-fit: contain; background: #f3f3f3; border-radius: 0.7rem; }
    .qty-label { font-weight: 500; margin-right: 0.5rem; }
    .add-cart-btn { font-weight: 500; letter-spacing: 0.04em; }
    .star { color: #ffc107; font-size: 1.18em; margin-right: 1px;}
    .star-outline { color: #e4e5e9; }
    .review-list { background: #fff; border-radius: 1rem; padding: 2rem; box-shadow: 0 1px 8px #0001; margin-bottom: 2.5rem;}
    .review-item { border-bottom: 1px solid #eaeaea; padding: 1.35rem 0; }
    .review-item:last-child { border-bottom: none; }
    .review-avatar { width: 44px; height: 44px; border-radius: 50%; object-fit: cover; background: #e9ecef; margin-right: 1rem; }
    .review-user { font-weight: 600; color: #0d6efd; font-size: 1.08rem;}
    .review-date { font-size: 0.92rem; color: #999; margin-left: 7px;}
    .review-comment { margin-top: 0.3rem; color: #212529;}
    .review-rating { font-size: 1em; }
    .product-relatives { background: #fff; border-radius: 1rem; padding: 1.6rem 2rem; box-shadow: 0 1px 8px #0001; }
    .product-relatives h4 { font-family: 'Playfair Display', serif; margin-bottom: 1.3rem; }
    .related-card { border-radius: 1rem; border: 1px solid #dee2e6; box-shadow: 0 1px 6px #0001; }
    .related-card .card-img-top { padding: 1rem 1rem 0.5rem 1rem; object-fit:contain; height: 130px; background: #f6f8fa; }
    @media (max-width: 991px) {
      .product-img-sticky { position: static; }
    }
    @media (max-width: 600px) {
      .product-detail-card, .product-relatives, .review-list { padding: 1rem !important;}
    }
  </style>
</head>
<body>
  
  <div class="container" style="max-width: 980px; margin-top: 100px;">
    <!-- Product detail -->
    <section class="product-detail-card row g-5 mb-5">
      <?php
      foreach ($productlist as $item):
        if($item['masp'] == $masp){
      ?>
      <div class="col-lg-5 text-center">
        <div class="product-img-sticky">
          <img src="Uploads/<?php echo $item['img']?>" alt="<?php $item['tensp']?>" class="product-img mb-3" />
        </div>
      </div>
      <div class="col-lg-7">
        <div class="product-title mb-2"><strong></strong><?php echo $item['tensp'] ?></div>
        <div class="product-category mb-3"><strong>Ma san pham: </strong><?php echo $item['masp'] ?> </div>
        <div class="product-category mb-3"><strong>Loai san pham: </strong><?php echo $item['loaisp'] ?> </div>
        <div class="product-category mb-3"><strong>Thiet bi: </strong><?php echo $item['thietbi'] ?> </div>
        <div class="product-category mb-3"><strong>Gia ban: </strong><?php echo $item['gia'] ?> </div>
        <div class="mb-1">
          <a href="list-product.php" class="btn btn-outline-secondary btn-sm">&laquo; Back to list Products</a>
        </div>
      </div>
      <?php break; } ?>
      <?php endforeach; ?>
    </section>
</body>
</html>