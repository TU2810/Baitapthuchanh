<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
<?php
    // phuong thuc POST
        $name = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password =$_POSt["confilm_password"];

    // in thong tin
        echo "<h1>Thong tin dang ki</h1>";
        echo "<p>Ten: $name</p>";
        echo "<p>Password: $password</p>";
    ?>