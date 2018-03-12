<?php
$ip = 'localhost';
$user = 'root';
$password = '';
$dbname = 'php';
$connection = mysqli_connect($ip, $user, $password, $dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>
