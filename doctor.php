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
require('cfunction.php');
//PROGRAM : PHP program to Insert and Read from MySQL database
//CODED BY : amatun
//DATE : 20-July-2014
//DATABASE NAME : php
//Table Name : appoin
//WRITE INTO THE DATABAS
require('db.php');
if (isset($_POST['submit'])) {
  $tod=$_POST['tod'];
  $tod=mysql_date($tod);
  $dname = $_POST['docn'];
  $specialzation = $_POST['sp'];
  $time = $_POST['time'];
  $date = $_POST['tod'];
  if (!mysqli_connect_errno()) {
      $visibility = 1;
    $query = "INSERT INTO doctor (`doctor_name`,`specialzation`,`time`,`date`,`visible`)
             VALUES('{$dname}','{$specialzation}','{$time}','{$tod}','{$visibility}')";
    if(mysqli_query($connection, $query)){
      echo "successfull !";
    }else{
      echo "Database Insert Failed";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
}
require("doctor.html");
//READ DATA FROM DATABASE USING PHP

require('db.php');
  if (!mysqli_connect_errno()) {
    $query = "SELECT * FROM doctor  WHERE `visible` = 1";
    $result = mysqli_query($connection, $query);
    if($result){
      echo "<div id='tableContainer' class='tableContainer'>";
      echo "<table border='0' cellpadding='0' cellspacing='0' width='100%' class='scrollTable'>";
      echo "<thead class='fixedHeader'>";
      echo "<tr>";
      echo "<th width='10%'>"."Sl_No"."</th>";
      echo "<th width='10%'>"."Unique_ID"."</th>";
      echo "<th width='10%'>"."doctor_name"."</th>";
        echo "<th width='10%'>"."specialzation"."</th>";
      echo "<th width='10%'>"."time"."</th>";
      echo "<th width='10%'>"."date"."</th>";
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
      echo "<td width='5%'>".$sl_no."</td>";
      echo "<td width='5%'>".$row1['id']."</td>";
      echo "<td width='5%'>".$row1['doctor_name']."</td>";
        echo "<td width='5%'>".$row1['specialzation']."</td>";
      echo "<td width='5%'>".$row1['time']."</td>";
      echo "<td width='5%'>".$row1['date']."</td>";
      echo "<td width='5%'>"."<a href = 'doctorupdate.php?id=$id' id='update'>EDIT</a>"."</td>";
      echo "<td width='5%'>"."<a href = 'deletedoctor.php?id=$id' id='delete'>DEL</a>"."</td>";
      echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  echo "</div>";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
?>
</div>

</body>
</html>
