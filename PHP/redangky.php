<?php
require 'connect.php';

// Lấy dữ liệu từ form
$userid = isset($_POST["userid"]) ? $_POST["userid"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$confirm_password = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : "";

// Kiểm tra mật khẩu xác nhận
if ($password !== $confirm_password) {
    echo "Mật khẩu xác nhận không khớp. <a href='./dangky.php'>Quay lại trang đăng ký</a>";
    exit();
}


// Chuẩn bị truy vấn SQL để thêm dữ liệu vào bảng users
$sql = "INSERT INTO users (userid, password) VALUES ('$userid', '$password')";

// Thực thi truy vấn SQL
if ($conn->query($sql) === TRUE) {
    echo "Đăng ký thành công! <a href='http://localhost:8080/Baitapthuchanh/PHP/'>Đăng nhập ngay</a>";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối đến CSDL
$conn->close();
?>
