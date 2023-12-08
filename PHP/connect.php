<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "mydb";

  $conn = new mysqli( $servername , $username , $password , $db);

  if ( $conn ->connect_error) {
    die("k thanh cong " . $conn ->connect_error);

  }
  echo "thanh cong <br>"
  ?> 