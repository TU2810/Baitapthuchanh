<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xét Học Lực</title>
  <link rel="stylesheet" href="styles.css">
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.container {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

label {
  font-weight: bold;
}

button {
  background-color: #4caf50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
  <div class="container">
    <h1>Xét Học Lực</h1>
    <form method="post" action="result.php">
      <label for="toan">Toán:</label>
      <input type="number" name="toan" step="0.1" min="0" max="10" required>

      <label for="ly">Lý:</label>
      <input type="number" name="ly" step="0.1" min="0" max="10" required>

      <label for="hoa">Hóa:</label>
      <input type="number" name="hoa" step="0.1" min="0" max="10" required>

      <label for="ta">Tự Nhiên (TA):</label>
      <input type="number" name="ta" step="0.1" min="0" max="10" required>

      <label for="van">Văn:</label>
      <input type="number" name="van" step="0.1" min="0" max="10" required>

      <label for="ls">Lịch Sử:</label>
      <input type="number" name="ls" step="0.1" min="0" max="10" required>

      <button type="submit">Xét Học Lực</button>
    </form>
  </div>
</body>
</html>