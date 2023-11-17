<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $exchangeRate = array("usd"=>22300,"eur"=> 27300,"sgd" => 17000,"jpy" => 120 );
    echo "<h3> Exchange rate vnd </h3>";
    echo "usd : $exchangeRate[0]<br>";
    echo "eur : $exchangeRate[1]<br>";
    echo "sgd : $exchangeRate[2]<br>";
    echo "jpy : $exchangeRate[3]<br>";
 ?>
</body>
</html>