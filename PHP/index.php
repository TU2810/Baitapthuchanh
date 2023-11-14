<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it is chrismas ?</title>
    <style>
     html {
        background-color: black;
        color: azure;
        font-size: 300px ;
        margin: 0 auto;
     }
     

    </style>
</head>
<body>
     <?php 
     // lay ngay thang hien tai
     $date = date ("d") ;
     $month = date ("m") ;
     //ngay thang giang sinh 
     $datec = "25";
     $mothc = "12";
     // kiem tra neu ngay hom nay = ngay giang sinh thif hirrnj dung ko sai 
     if ($date == $datec && $month == $monthc) 
     {
        echo "dung";
     }
     else
     {
        echo "sai";
     }

     ?>
</body>
</html>