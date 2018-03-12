<?php
session_start();
require('db.php');
$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($connection,"SELECT `email` FROM register WHERE `email` = '{$user_check}' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['email'];
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}
?>
