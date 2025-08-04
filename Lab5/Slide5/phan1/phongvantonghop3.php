<?php

// Bai tap phong van tong hop 3:
$email = "abcd@gmail.com";

// filter_var ho tro kiem tra 1 email co dung dinh dang
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<p>Email '$email' is valid. </p>";

// chia email thanh ten nguoi dung va ten mien
$parts = explode('@', $email);
$username = $parts[0];
$domain = $parts[1];

echo "<p>Username: $username </p>";
echo "<p>Domain: $domain </p>";
} else {
    echo "<p>Email: '$email' is not valid.</p>"; 
}

?>