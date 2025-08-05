<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
</head>
<body>
    <h1>Form GET</h1>
    <form action="Bai1.php" method="get">
        <label for="name">Name: </label>
        <input style="margin-bottom: 5px;" type="text" name="name"><br>
        <label for="name">Email: </label>
        <input style="margin-bottom: 5px;" type="email" name="email"><br>
        <input style="margin-bottom: 15px;" type="submit" value="submit">
    </form>
    
</body>
</html>

<?php 

if(isset($_GET['name']) && isset($_GET['email'])){
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo "Name: $name <br>";
    echo "Email: $email";
} else {
    echo "No data received";
}
?>