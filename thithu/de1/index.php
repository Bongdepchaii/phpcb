<?php
session_start();

$username = $_SESSION['user'] = "edu";
$password = $_SESSION['pass'] = "learn2023";

if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    // if(isset($_POST['submit'])){
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // if(isset($_POST['submit'])){
    if ($user == $username && $pass = $password) {
        // $user = $username;
        // $pass = $password;
        header('Location: courses.php');
        exit;
    } else {
        // echo "user, pass sai";
    }
}
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Username</label>
        <input style="margin-bottom: 10px;" type="text" name="username"><br>
        <label for="">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="Login" name="submit">
    </form>

</body>

</html>