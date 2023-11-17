<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $usd = 22300;
    $eur = 27300;
    $sgd = 17000;
    $jpy = 120;
    $amount = $_GET['amount'];
    echo "$amount usd is equal ";
    if ($_GET["currency"] == "usd")
    {
        echo $amount * $usd ;
    }
    elseif ($_GET["currency"] =="eur") {
        echo $amount * $eur;
    }
    elseif ($_GET["currency"] =="sgd") {
        echo $amount * $sgd;
    }
    else {
        echo $amount * $jpy ;

    }
echo "vnd ";
 ?>
</body>
</html>