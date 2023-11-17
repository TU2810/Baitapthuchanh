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
    $subjects = ["toan", "ly", "hoa", "ta", "van", "ls"];
    $totalScore = 0;
    $belowFour = false;

    foreach ($subjects as $subject) {
        $score = floatval($_POST[$subject]);
        if ($score < 4) {
            $belowFour = true;
        }
        $totalScore += $score;
    }

    $averageScore = $totalScore / count($subjects);
    $grade = "";

    if ($belowFour) {
        $grade = "Yếu";
    } elseif ($averageScore < 5) {
        $grade = "Trung bình";
    } elseif ($averageScore < 8) {
        $grade = "Khá";
    } else {
        $grade = "Giỏi";
    }

    echo "<div class='result'>";
    echo "<p>Điểm trung bình: " . number_format($averageScore, 2) . "</p>";
    echo "<p>Xếp loại học lực: $grade</p>";
    echo "</div>";
}
?>
</body>
</html>