<?php
session_start();
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
    <form action="listproduct.php" method='get'>
        <div class="input-group mb-3">
  <input style="" type="text" class="form-control" placeholder="Search"  aria-describedby="button-addon2">
  <button class="btn btn-outline-success" type="submit" id="button-addon2">Tim kiem</button>
</form>
</div>
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ma san pham</th>
      <th scope="col">Loai san pham</th>
      <th scope="col">Ten san pham</th>
      <th scope="col">Ten san pham</th>
      <th scope="col">Gia ban</th>
      <th scope="col">Hinh anh</th>
      <th scope="col">Sua</th>
      <th scope="col">Xoa</th>
      <th scope="col">Xem chi tiet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a style="font-size: 0.9rem;" class="btn btn-light" href="product-details.php">Sua</a></td>
      <td><a style="font-size: 0.9rem;" class="btn btn-danger" href="product-details.php">Xoa</a></td>
      <td><a style="font-size: 0.9rem;" class="btn btn-info" href="product-details.php">Xem chi tiet</a></td>
    </tr>
  </tbody>
</table>
    </div>

</center>

</body>
</html>

