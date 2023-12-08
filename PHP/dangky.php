<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Tài Khoản</title>
</head>
<body>
    <h2>Đăng Ký Tài Khoản</h2>
    <form action="redangky.php" method="post">
        <label for="userid">User ID:</label>
        <input type="text" id="userid" name="userid" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <button type="submit">Đăng Ký</button>
    </form>
</body>
</html>
