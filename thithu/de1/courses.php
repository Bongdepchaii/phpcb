<?php
session_start();

$i = 1;

$student = $_SESSION['student'] = [
    ["Nguyen Van A", "CNTT", 2000000, "14 Ngay"],
    ["Nguyen Van B", "Designer", 890000, "7 Ngay"],
    ["Nguyen Van C", "MKT", 1390000, "10 Ngay"],
    ["Nguyen Van D", "CNTT", 1189000, "8 Ngay"],
    ["Nguyen Van E", "MKT", 590000, "5 Ngay"],
];

if(isset($_GET['check']) && isset($_GET['search'])){
    $search = strtolower(trim($_GET['search']));
    $kq = [];

foreach ($student as $item){
    if(
        strpos(strtolower($item[0]), $search) !== false ||
        strpos(strtolower($item[1]), $search) !== false ){
        $kq[] = $item;
}
}
$student = $kq;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top: 50px">
        <?php 
        if (isset($_SESSION['user'])){
            $username = $_SESSION['user'];
            echo "Xin chào, <b>$username</b> <a href='dangxuat.php'>Đăng xuất</a>";
        }
        ?>
        <form action="courses.php" method="get">
            <input type="text" class="form-control" id="inlineFormInputGroup" name="search" placeholder="Search"><br>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2" name="check">Submit</button>
            </div>
        </form>
    <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Student</th>
                    <th scope="col">Course</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Duration</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($student as $item): ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $item[0] ?></td>
                        <td><?= $item[1] ?></td>
                        <td><?= $item[2] ?></td>
                        <td><?= $item[3] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>