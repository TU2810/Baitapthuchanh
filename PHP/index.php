<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<?php
// Lấy ngày, tháng và năm hiện tại
$today = getdate();
$curYear = $today["year"];
$curMonth = $today["mon"];
$curDay = $today["mday"];

// Kiểm tra nếu người dùng đã chọn ngày, tháng, năm
if (isset($_POST['selectedDay']) && isset($_POST['selectedMonth']) && isset($_POST['selectedYear'])) {
    $selectedDay = $_POST['selectedDay'];
    $selectedMonth = $_POST['selectedMonth'];
    $selectedYear = $_POST['selectedYear'];
    echo "Bạn đã chọn ngày: $selectedDay, tháng: $selectedMonth, năm: $selectedYear";
}
?>

<form method="post" action="">
    <label for="day">Chọn ngày:</label>
    <select name="selectedDay" id="day">
        <?php
        // Tạo danh sách ngày từ 1 đến 31
        for ($day = 1; $day <= 31; $day++) {
            echo "<option value=\"$day\">$day</option>";
        }
        ?>
    </select>

    <label for="month">Chọn tháng:</label>
    <select name="selectedMonth" id="month">
        <?php
        // Tạo danh sách tháng từ 1 đến 12
        for ($month = 1; $month <= 12; $month++) {
            echo "<option value=\"$month\">$month</option>";
        }
        ?>
    </select>

    <label for="year">Chọn năm:</label>
    <select name="selectedYear" id="year">
        <?php
        // Tạo danh sách năm từ 1900 đến năm hiện tại
        for ($year = 1900; $year <= $curYear; $year++) {
            echo "<option value=\"$year\">$year</option>";
        }
        ?>
    </select>
    <button type="submit">Chọn</button>
</form>

</body>
</html>