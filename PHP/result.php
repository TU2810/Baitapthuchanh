<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Lấy giá trị từ form
    $amount = $_GET["amount"];
    $currency = $_GET["currency"];

    // Tính toán giá trị chuyển đổi
    switch ($currency) {
        case "usd":
            $exchangeRate = 23000;
            break;
        case "aud":
            $exchangeRate = 17000;
            break;
        case "jpy":
            $exchangeRate = 200;
            break;
        case "eur":
            $exchangeRate = 27000;
            break;
        default:
            $exchangeRate = 1; // Mặc định nếu không chọn ngoại tệ
    }

    $result = $amount * $exchangeRate;

    // Hiển thị kết quả
    echo "<h2>Kết quả chuyển đổi</h2>";
    echo "<p>$amount $currency = $result VND</p>";
}
?>
</body>
</html>