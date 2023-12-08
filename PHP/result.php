<?php
require 'connect.php';
// Lấy dữ liệu từ form
$userId = isset($_POST["userId"]) ? $_POST["userId"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

// Chuẩn bị truy vấn SQL để kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM users WHERE userid = '$userId' AND password = '$password'";
$result = $conn->query($sql);

// Kiểm tra kết quả
if ($result->num_rows > 0) {
    // Đăng nhập thành công
    echo "Xin chào, $userId!";
} else {
    // Đăng nhập không thành công
    echo "Bạn nhập chưa đúng. <a href='http://localhost:8080/Baitapthuchanh/PHP/'>Quay lại trang đăng nhập</a>";
}

// Đóng kết nối đến CSDL
$conn->close();
?>
