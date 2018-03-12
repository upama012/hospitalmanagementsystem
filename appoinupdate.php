<?php
require('session.php');
?>
<?php
//PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
//CODED BY : amatun aysha
//DATABASE NAME : php_mysqli
//Table Name :doctor
//DATE :
require('db.php');
$id = $_GET['id'];
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT `patient_name`,`doctor`,`gender`,`time`,`date`,`contact` FROM appoin WHERE `id`='{$id}' ";
  $result = mysqli_query($connection,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $patient_name=$row['patient_name'];
    $doctor=$row['doctor'];
    $gender=$row['gender'];
    $time=$row['time'];
    $date=$row['date'];
    $contact=$row['contact'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
require('appoinupdate.html');
require('cfunction.php');
//Update the data and Save it into the MySQL database;
require('db.php');
if (isset($_POST['submit'])) {
  $tod=$_POST['tod'];
  $tod=mysql_date($tod);
  $pan = $_POST['pan'];
  $docn= $_POST['docn'];
  $gnd = $_POST['gnd'];
  $time = $_POST['time'];
  $date =$_POST['tod'];
  $cno= $_POST['cno'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "UPDATE appoin SET `patient_name`='{$pan}',`doctor`='{$docn}',
             `gender`='{$gnd}',`time`='{$time}',`date`='{$tod}',`contact`='{$cno}' WHERE `id`='{$id}' ";
    if(mysqli_query($connection, $query)){
      echo "<b><script>alert('SUCCESS : Data update successfully');</script></b>";
      echo "<script>window.location.href = 'appoin.php'</script>";
    }else{
      echo "Database Insert Failed";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
}
?>
