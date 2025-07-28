<?php
session_start();

$mesagee = "";
$username = 'abc';
$password = 'abc';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['username'] == $username && $_POST['password'] == $password){
        header('location: list-product.php');
    } else{
$mesagee = "<br/><div class='alert alert-danger'>Login Failed</div>";
    }
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
  <div class="auth-container">
    <h2>Login</h2>
    <form id="loginForm" action="index.php" method="post">
      <div class="mb-3">
        <label>Tai khoan</label>
        <input type="text" name="username" class="form-control" required />
      </div>
      <div class="mb-3">
        <label>Mat khau</label>
        <input type="password" name="password" class="form-control" required />
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
        <?php
        echo  $mesagee; ?>
      </div>
      <div class="form-text text-center mt-3">
        <a href="#">Forgot password?</a> · <a href="#">Sign up</a>
      </div>
    </form>
  </div>
</body>
</html>