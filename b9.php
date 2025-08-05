<?php
session_start();

$birtday = date("Y-m-d");
$i = 1;

if(isset($_GET['Gui'])){
    $ten = $_GET['Ten'] ?? '';
    $gioitinh = $_GET['Gioitinh'] ?? '';
    $ngaysinh = $_GET['Ngaysinh'] ?? '';
    $birtday = $_GET['Diachi'] ?? '';
    $sdt = $_GET['Sodienthoai'] ?? '';
    $chuyennghanh = $_GET['Chuyennghanh'] ?? '';
    $mota = $_GET['Mota'] ?? '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Hello</title>
</head>

<body>

    <div class="container" style="max-width:500px">
        <h1 style="margin-top: 50px;">Add sinh vien</h1>
        <form action="b9.php" method="get">
            <label for="">Ho va ten</label><br>
            <input class="form-control" type="text" name="Ten">
            <label for="">Gioi tinh: 
                <input type="radio" name="Gioitinh" value="Nam">Nam
                <input type="radio" name="Gioitinh" value="Nu">Nu
                <input type="radio" name="Gioitinh" value="Khac">Khac
            </label><br>
            <label for="">Ngay sinh </label>
            <input class="form-control" type="date" name="Ngaysinh">
            <label for="">Dia chi </label>
            <input class="form-control" type="text" name="Diachi">
            <label for="">So Dien Thoai</label>
            <input class="form-control" type="Tel" name="Sodienthoai">
            <label for="">Chuyen nganh </label>
            <select class="form-control" name="Chuyennghanh" id="">Select
                <option value="CNTT">CNTT</option>
                <option value="Designer">Designer</option>
                <option value="Marketing">Marketing</option>
            </select>
            <label for="">Mo ta</label>
            <textarea class="form-control" name="Mota" col="3" id=""></textarea>
            <input style="margin-top: 15px;" class="btn btn-success" type="submit" name="Gui" value="Gui">
        </form>
    </div>
    <div class="container" style="width: 1400px; font-size: 0.8rem; margin-top: 50px">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Ho va ten</th>
      <th scope="col">Gioi tinh</th>
      <th scope="col">Ngay sinh</th>
      <th scope="col">Dia chi</th>
      <th scope="col">So dien Thoai</th>
      <th scope="col">Chuyen nghanh</th>
      <th scope="col">Mo ta</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo "$ten" ?> </td>
      <td><?php echo "$gioitinh" ?> </td>
      <td><?php echo "$ngaysinh" ?> </td>
      <td><?php echo "$birtday" ?> </td>
      <td><?php echo "$sdt" ?> </td>
      <td><?php echo "$chuyennghanh" ?> </td>
      <td><?php echo "$mota" ?> </td>
    </tr>
  </tbody>
</table>
    </div>

</body>

</html>