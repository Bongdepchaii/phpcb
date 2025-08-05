<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Xử lý dữ liệu từ phương thức GET
//Dùng isset để kiểm tra xem có dữ liệu được gửi từ form hay không
if (isset($_GET['submit'])) {
    $name = $_GET['name'] ?? '';// Dùng toán tử ?? để gán giá trị mặc định nếu không có dữ liệu
    $gender = $_GET['gender'] ?? '';
    $birthdate = $_GET['birthdate'] ?? '';
    $birthdate_int = strtotime($birthdate); // Chuyển đổi ngày sinh sang định dạng timestamp
    if ($birthdate_int) {
        $birthdate = date('d-m-Y', $birthdate_int); // Định dạng lại ngày sinh
    } 
    $address = $_GET['address'] ?? '';
    $email = $_GET['email'] ?? '';
    $phone = $_GET['phone'] ?? '';
    $major = $_GET['major'] ?? '';
    $description = $_GET['description'] ?? '';
    // Hiển thị dữ liệu nhận được từ form
    echo "<h2>Thông tin sinh viên:</h2>";
    echo "<p><strong>Họ tên:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Giới tính:</strong> " . htmlspecialchars($gender) . "</p>";
    echo "<p><strong>Ngày sinh:</strong> " . htmlspecialchars($birthdate) . "</p>"; 
    echo "<p><strong>Địa chỉ:</strong> " . htmlspecialchars($address) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Số điện thoại:</strong> " . htmlspecialchars($phone) . "</p>";
    echo "<p><strong>Chuyên ngành:</strong> " . htmlspecialchars($major) . "</p>";
    echo "<p><strong>Mô tả:</strong> " . nl2br(htmlspecialchars($description)) . "</p>";
} else {
    // Nếu không có dữ liệu, hiển thị thông báo
    echo "<h2>Không có dữ liệu được gửi từ form.</h2>";
}
?>

    <h1>Thêm sinh viên sử dụng phương thức GET</h1>
    <form action="form_get.php" method="get">
        <table>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="name" value="" require></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>
                    <input type="radio" name="gender" value="Nam" checked> Nam
                    <input type="radio" name="gender" value="Nữ"> Nữ
                    <input type="radio" name="gender" value="Khác"> Khác
                </td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="date" name="birthdate" value=""></td>  
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="address" value=""></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value=""></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><input type="tel" name="phone" value=""></td>
            </tr>
            <tr>
                <td>Chuyên ngành:</td>
                <td>
                    <select name="major">
                        <option value="CNTT">Công nghệ thông tin</option>
                        <option value="KT">Kỹ thuật</option>
                        <option value="QTKD">Quản trị kinh doanh</option>
                    </select>
                </td>
            </tr>   
            <tr>
                <td>Mô tả</td>
                <td><textarea name="description" rows="4" cols="50"></textarea></td>
            </tr>
            </table>
            <input type="submit" value="Thêm sinh viên" name="submit">
    </form>    
</body>
</html>