<?php
require('session.php');
?>
<html>
</body>
<div class="php">
<?php
//PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
//CODED BY : amatun aysha
//DATABASE NAME : php_mysqli
//Table Name :doctor
//DATE :
require('db.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT * FROM doctor WHERE `id`='{$id}' ";
  $result = mysqli_query($connection,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $doctor_name=$row['doctor_name'];
    $specialzation=$row['specialzation'];
    $time=$row['time'];
    $date=$row['date'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
require('doctorupdate.html');
require('cfunction.php');
//Update the data and Save it into the MySQL database;
require('db.php');
if (isset($_POST['submit'])) {
  $tod=$_POST['tod'];
  $tod=mysql_date($tod);
  $docn = $_POST['docn'];
  $sp = $_POST['sp'];
  $time = $_POST['time'];
  $date =$_POST['tod'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "UPDATE doctor SET `doctor_name`='{$docn}',`specialzation`='{$sp}',
             `time`='{$time}',`date`='{$tod}' WHERE `id`='{$id}' ";
    if(mysqli_query($connection, $query)){
      echo "<b><script>alert('SUCCESS : Data update successfully');</script></b>";
      echo "<script>window.location.href = 'doctor.php'</script>";
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

</body>
</html>
