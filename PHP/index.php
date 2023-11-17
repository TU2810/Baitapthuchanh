<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $exchangeRate = array(22300, 27300, 17000, 120 );
    $exchangeRate[] = 600 ;
    $exchangeRate[] = 16000 ;
    $exchangeRate[0] = 22200 ;
    echo "<h3> Exchange rate vnd </h3>";
    echo "usd : $exchangeRate[0]<br>";
    echo "eur : $exchangeRate[1]<br>";
    echo "sgd : $exchangeRate[2]<br>";
    echo "jpy : $exchangeRate[3]<br>";
    echo "chn : $exchangeRate[4]<br>";
    echo "aud : $exchangeRate[5]<br>";
    ?>
</body>
</html>