<?php 
require 'connect.php';
//
$sql = "INSERT INTO flights (Origin , Destination, Duration ) VALUES ('HAF NOI', 'PARIS', '4000')";
 //
 $conn->query($sql);
 //
 $conn->close();
?>