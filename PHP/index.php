<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nhập ngày tháng năm</title>
  <style>
    body {
      background-color: black;
    }
    .test {
      width: 300px;
      height: 100px;
      background-color: #fff;
      color: #333;
      text-align: center;
      border-radius: 5px;
      margin:0 auto;
    }
    .get {
      background-color: greenyellow;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <form class="test" action="result.php" method="get">
    <h3>Chọn Ngày Tháng Năm </h3>
<label for=""> Ngay:</label>
<select name="day" id="day">
  <?php
  for($day = 1 ; $day <=31 ; $day++)
  echo"<option value=\"$day\">$day</option>";
  ?>
</select>

<label for=""> Thang:</label>
<select name="month" id="month">
  <?php
  for($month = 1 ; $month <=31 ; $month++)
  echo"<option value=\"$month\">$month</option>";
  ?>
</select>

<label for=""> Nam:</label>
<select name="year" id="year">
  <?php
  //lay nam hien tai
  $today = getdate();
  $curYear = $today["year"];
  for($year = 1900 ; $year <= $curYear ; $year++)
  echo"<option value=\"$year\">$year</option>";
  ?>
</select><br><br>
<input class="get" type="submit" value="chọn">
  </form>
</body>
</html>