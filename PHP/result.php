<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$exchangeRate = array ( "usd" => 22300 , "eur" => 27300 ,"sgd" =>17000, "jpy" =>120);
$amount = $_GET['amount'];
$currency = $_GET['currency'];
echo " $amount usd is equal " .number_format ($amout * $exchangeRate[$currency]) . "vnd ";

 ?>
</body>
</html>