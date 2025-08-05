<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Number and sum</h1>
    <form action="Bai3.php" method="post">
        <label for="Num1">Num1: </label>
        <input style="margin-bottom: 5px;" type="number" name="Num1"><br>
        <label for="Num2">Num2: </label>
        <input style="margin-bottom: 5px;" type="number" name="Num2"><br>
        <input style="margin-bottom: 15px;" type="submit" value="submit">
    </form>
</body>
</html>

<?php 

if(isset($_POST['Num1']) && isset($_POST['Num2'])){
    $Num1 = $_POST['Num1'];
    $Num2 = $_POST['Num2'];
    $sum = $Num1 + $Num2;

    echo "Sum of $Num1 and $Num2 is $sum";
} else {
    echo "No data received";
}
?>