<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>doi tien </h3>
   <form action="result.php " method="get ">
    <label for="amount"> so tien :</label>
    <input type="number" name="amount"> <br>
    <label for="currency"> chon loai tien :</label>
    <select name="currency" required>
        <option value="usd">usd - 23,000 vnd</option>
        <option value="aud">aud - 17,000 vnd </option>
        <option value="jpy">jpy - 200 vnd</option>
        <option value="eur">eur - 27,000 vnd </option>
    </select><br>
    <input type="submit" value="chuyen doi ">
   </form>
</body>
</html>