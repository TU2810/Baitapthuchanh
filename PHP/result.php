<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ form
    $math = $_POST["toan"];
    $physics = $_POST["ly"];
    $chemistry = $_POST["hoa"];

    // Tính tổng điểm
    $totalScore = $math + $physics + $chemistry;

    // Điểm chuẩn của từng chuyên ngành
    $cutOffScores = array(
        'cntt' => 18,
        'cntt_clc' => 22,
        'khdl' => 18,
        'dia_chat' => 17,
        'moi_truong' => 15,
    );

    // Dự báo ngành trúng tuyển
    $prediction = "Không rõ";

    foreach ($cutOffScores as $major => $cutOffScore) {
        if ($totalScore >= $cutOffScore) {
            $prediction = $major;
            break;
        }
    }

    // Hiển thị kết quả
    echo "<h2>Kết quả dự báo</h2>";
    echo "<p>Tổng điểm: $totalScore</p>";
    echo "<p>Ngành trúng tuyển: $prediction</p>";
}
?>

</body>
</html>