<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "the game ";
    if ($_GET["response"] == "yes")
    {
        echo "has been quited ";

    } 
    else
    {
        echo " will be continued in 3 second ";
    }
    
    echo "<br> after if statment ";

    ?>
</body>
</html>