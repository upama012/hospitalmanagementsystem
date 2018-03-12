<?php
//PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
//CODED BY : amatun aysha
//DATABASE NAME : php_mysqli
//Table Name :doctor
//DATE :
require('db.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT `patient_name`,`doctor_name`,`visible`,`time`,`date`,`gender`,`address` FROM patient WHERE `id`='{$id}' ";
  $result = mysqli_query($connection,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $patient_name=$row['patient_name'];
    $doctor_name=$row['doctor_name'];
    $visible=$row['visible'];
    $time=$row['time'];
    $date=$row['date'];
    $gender=$row['gender'];
    $address=$row['address'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
require('patientupdate.html');
require('cfunction.php');
require('db.php');
//Update the data and Save it into the MySQL database;
if (isset($_POST['submit'])) {
  $tod=$_POST['tod'];
  $tod=mysql_date($tod);
  $pname = $_POST['pname'];
  $dname= $_POST['dname'];
  $gnd = $_POST['gnd'];
  $time = $_POST['time'];
  $date =$_POST['tod'];
  $adr= $_POST['adr'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "UPDATE patient SET `patient_name`='{$pname}',`doctor_name`='{$dname}',
             `gender`='{$gnd}',`time`='{$time}',`date`='{$tod}',`address`='{$adr}' WHERE `id`='{$id}' ";
    if(mysqli_query($connection, $query)){
      echo "<b><script>alert('SUCCESS : Data update successfully');</script></b>";
      echo "<script>window.location.href = 'patient.php'</script>";
    }else{
      echo "Database Insert Failed";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
}
?>
</div>
