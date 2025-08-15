<?php
session_start();

$_SESSION['user'] = "admin";
$_SESSION['pass'] = "123456";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {
        $username = $_SESSION['user'];
        $password = $_SESSION['pass'];
        $user = $_POST['username'] ?? "";
        $pass = $_POST['password'] ?? "";
        if ($user == $username && $pass == $password) {
            header('location: product.php');
        } else {
            echo "Sai tai khoan va mat khau";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">username</label>
        <input type="text" name="username">
        <label for="">password</label>
        <input type="text" name="password">
        <input type="submit" name="submit">
    </form>


</body>

</html>