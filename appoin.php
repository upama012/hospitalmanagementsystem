<?php
require('session.php');
?>
<html>
<head>
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<div class="appoinment">
<?php
//PROGRAM : PHP program to Insert and Read from MySQL database
//CODED BY : amatun
//DATE :
//DATABASE NAME : php
//Table Name : appoin
//WRITE INTO THE DATABAS

require("appoin.html");
require('db.php');
require('cfunction.php');
if (isset($_POST['submit'])) {
  $tod=$_POST['tod'];
  $tod=mysql_date($tod);
  $pname = $_POST['pan'];
  $dname = $_POST['docn'];
  $gender = $_POST['gnd'];
  $time = $_POST['time'];
  $date = $_POST['tod'];
  $contact =$_POST['cno'];

  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "INSERT INTO appoin (`patient_name`, `doctor`, `gender`,`time`,`date`,`contact`,`visible`)
             VALUES('{$pname}', '{$dname}', '{$gender}', '{$time}','{$tod}','{$contact}','{$visibility}')";
    if(mysqli_query($connection, $query)){
      echo "successfull !";
    }else{
      echo "Database Insert Failed";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }

}
//READ DATA FROM DATABASE USING PHP

  if (!mysqli_connect_errno()) {
    $query = "SELECT * FROM appoin  WHERE `visible` = 1";
    $result = mysqli_query($connection, $query);
    if($result){
      echo "<div id='tableContainer' class='tableContainer'>";
      echo "<table border='0' cellpadding='0' cellspacing='0' width='100%' class='scrollTable'>";
      echo "<thead class='fixedHeader'>";
      echo "<tr>";
      echo "<th width='10%'>"."Sl_No"."</th>";
      echo "<th width='10%'>"."Unique_ID"."</th>";
      echo "<th width='10%'>"."patient_name"."</th>";
      echo "<th width='10%'>"."doctor_name"."</th>";
      echo "<th width='10%'>"."gender"."</th>";
      echo "<th width='10%'>"."time"."</th>";
      echo "<th width='10%'>"."date"."</th>";
      echo "<th width='10%'>"."contact"."</th>";
      echo"<th width='10%'>"."Update Record"."</th>";
      echo"<th width='10%'>"."Delete Record"."</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody class='scrollContent'>";
      echo "<tr>";
      echo "</tr>";
    $sl_no = 0;
    while ($row1 = mysqli_fetch_array($result, MYSQLI_BOTH)) {
      $sl_no = $sl_no + 1;
      $id = $row1['id'];
      echo "<tr>";
      echo "<td  width='10%'>".$sl_no."</td>";
      echo "<td  width='10%'>".$row1['id']."</td>";
      echo "<td  width='11%'>".ucwords($row1['patient_name'])."</td>";
      echo "<td  width='11%'>".$row1['doctor']."</td>";
      echo "<td  width='10%'>".$row1['gender']."</td>";
      echo "<td  width='10%'>".$row1['time']."</td>";
      echo "<td  width='10%'>".$row1['date']."</td>";
      echo "<td  width='10%'>".$row1['contact']."</td>";
      echo "<td  width='10%'>"."<a href = 'appoinupdate.php?id=$id' id='update'>EDIT</a>"."</td>";
      echo "<td  width='10%'>"."<a href = 'deleteappoin.php?id=$id' id='delete'>DEL</a>"."</td>";
      echo "</tr>";
  }
  echo "</table>";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
?>
</div>
<div class="footer">
  <div class="copy">
    <p>Webside created&copy; by Amatun Aysha With Ayerin Neshat</p>
  </div>
  <div class="folow">
    <a href="www.facebook.com"><img src="image/fb.png" alt="fb"/></a>
    <a href="www.linkdin.com"><img src="image/link.png" alt="link"/></a>
    <a href="www.twitter.com"><img src="image/twt.png" alt="twt"/></a>
  </div>
</div>
</body>
</html>
