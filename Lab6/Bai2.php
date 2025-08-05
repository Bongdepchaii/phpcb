<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form POST</h1>
    <form action="Bai2.php" method="post">
        <label for="name">Name: </label>
        <input style="margin-bottom: 5px;" type="text" name="name"><br>
        <label for="name">Email: </label>
        <input style="margin-bottom: 5px;" type="email" name="email"><br>
        <input style="margin-bottom: 15px;" type="submit" value="submit">
    </form>
</body>
</html>

<?php 

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "Name: $name <br>";
    echo "Email: $email";
} else {
    echo "No data received";
}
?>