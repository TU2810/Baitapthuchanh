<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn giới tính</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        #result {
            font-weight: bold;
            color: green;
        }

        #error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Chọn giới tính và nhập thông tin</h1>

    <form method="post" action="">
        <label for="gender">Giới tính:</label>
        <select name="gender" id="gender">
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>

        <br><br>

        <label for="height">Chiều cao (cm):</label>
        <input type="number" name="height" id="height" placeholder="Nhập chiều cao">

        <br><br>

        <label for="weight">Cân nặng (kg):</label>
        <input type="number" name="weight" id="weight" placeholder="Nhập cân nặng">

        <br><br>

        <button type="submit">Kiểm tra</button>
    </form>

    <br><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gender = $_POST['gender'];
        $height = floatval($_POST['height']);
        $weight = floatval($_POST['weight']);

        if ($gender == 'male' && $height > 160 && $weight > 50) {
            echo '<div id="result">Yêu cầu đạt được: Nam, chiều cao > 160cm, cân nặng > 50kg</div>';
        } elseif ($gender == 'female' && $height > 150 && $weight > 40 && $weight < 70) {
            echo '<div id="result">Yêu cầu đạt được: Nữ, chiều cao > 150cm, 40kg < cân nặng < 70kg</div>';
        } else {
            echo '<div id="error">Không đạt được yêu cầu</div>';
        }
    }
    ?>
</body>
</html>