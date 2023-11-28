<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="result.php" method="post">
        <label for="toan">Toán:</label>
        <input type="number" name="toan" step="0.1" min="0" max="10" required><br>
        <label for="ly">Lý:</label>
        <input type="number" name="ly" step="0.1" min="0" max="10" required><br>
        <label for="hoa">Hóa:</label>
        <input type="number" name="hoa" step="0.1" min="0" max="10" required><br>
        <label for="tienganh">Tiếng Anh:</label>
        <input type="number" name="tienganh" step="0.1" min="0" max="10" required><br>
        <label for="van">Văn:</label>
        <input type="number" name="van" step="0.1" min="0" max="10" required><br>
        <label for="lichsu">Lịch Sử:</label>
        <input type="number" name="lichsu" step="0.1" min="0" max="10" required><br>
        <button type="submit">Tính điểm trung bình</button>
    </form>
</body>
</html>