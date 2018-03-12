<html>
<head>
<link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<div class="appoinment">
<?php
//PROGRAM : PHP program to Insert and Read from MySQL database
//CODED BY : SUMAN GANGOPADHYAY
//DATE : 20-July-2014
//DATABASE NAME : php
//Table Name : appoin
//WRITE INTO THE DATABAS

require('patient.html');
require('cfunction.php');
require('db.php');
if (isset($_POST['submit'])) {
  $tod=$_POST['tod'];
  $tod=mysql_date($tod);
  $paname = $_POST['pname'];
  $doname = $_POST['dname'];
  $gender = $_POST['gnd'];
  $time = $_POST['time'];
  $date = $_POST['tod'];
  $address =$_POST['adr'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "INSERT INTO patient (`patient_name`,`doctor_name`,`visible`, `time`,`date`,`gender`,`address`)
             VALUES('{$paname}', '{$doname}', '{$visibility}','{$time}','{$tod}','{$gender}','{$address}')";
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
    $query = "SELECT * FROM patient  WHERE `visible` = 1";
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
        echo "<th width='10%'>"."address"."</th>";
      echo "<th width='10%'>"."gender"."</th>";
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
      echo "<td width='8%'>".$sl_no."</td>";
      echo "<td width='8%'>".$row1['id']."</td>";
      echo "<td width='10%'>".ucwords($row1['patient_name'])."</td>";
      echo "<td width='10%'>".$row1['doctor_name']."</td>";
        echo "<td width='10%'>".$row1['address']."</td>";
      echo "<td width='10%'>".$row1['gender']."</td>";
      echo "<td width='10%'>".$row1['time']."</td>";
      echo "<td width='10%'>".$row1['date']."</td>";
      echo "<td width='10%'>"."<a href = 'patientupdate.php?id=$id' id='update'>EDIT</a>"."</td>";
      echo "<td width='10%'>"."<a href = 'deletepatient.php?id=$id' id='delete'>DEL</a>"."</td>";
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
