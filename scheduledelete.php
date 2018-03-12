<?php
require('session.php');
?>
<?php
//PROGRAM : To make data delete (invisible) from user but not from MySQL Database
//CODED BY : amatun aysha
//DATABASE NAME : php_mysqli
//Table Name : userinfo`
//DATE : 20-July-2014
require('db.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $visibility = 0;
  $query = "UPDATE schedule SET `visible`= '{$visibility}' WHERE `id`='{$id}' ";
  if (mysqli_query($connection,$update_query)) {
    echo "<script>window.location.href = 'schedule.php'</script>";
  }else{
    echo "ERROR : failed to Delete data"."<br>";
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);
?>
