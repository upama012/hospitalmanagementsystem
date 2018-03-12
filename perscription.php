<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Print Prescription</title>
    <link rel="stylesheet" href="css/prescription.css">
  </head>
  <body>
    <div class="main">
      <!--Header Are-->
      <div class="header">

        <div class="dname">
          <h2>Dr. Ashiquir Rahaman</h2>
          <p>MBBS, DBMS (Dhaka)<br>Professior, Dhaka Medical College, Dhaka</P>

        </div>
        <div class="hosname">
          <h2>Dhaka Medical College</h2>
            <p> Uttra, Dhaka-1200<br>Phone: 123456987</p>
        </div>
        <div class="patainet">
          <p> Age :-----------&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>Date:-----------</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Reference No: ------------</span></p>
        </div>
      </div>
      <!--End of Header Area-->
      <div class="pright">
          <center><b>Problem & Test</b></center>
      </div>
      <div class="medicne">
        <div class="rx">
        <strong><i>Rx_</i></strong>
        </div>
        <div class="next">
          <p>Next Visiting day:</p>
        </div>
      </div>

    </div>
  </body>
</html>

<?php
$user = 'root';
$password = '';
$ip = 'localhost';
$dbname = 'php';
$connection_read = mysqli_connect($ip, $user, $password, $dbname);
  if (!mysqli_connect_errno()) {
    $query = "SELECT * FROM prescription WHERE `visible` = 1";
    $result = mysqli_query($connection_read, $query);

    if($result){
      echo "<table id='tbl'>
    <tr>
      <th>Sl. No.</th>
      <th>ID</th>
      <th style='width:200px;'>Patient Name</th>
      <th>Age</th>
      <th>Visiting Date</th>
      <th>Problem</th>
      <th>Test</th>
      <th>Next Visiting Date</th>
      <th>Reference No</th>
      <th>Print</th>
    </tr>";
    $sl_no = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
      $sl_no = $sl_no + 1;
      $id = $row['id'];
      echo "<tr>";
      echo "<td>".$sl_no."</td>";
      echo "<td>".$row['id']."</td>";
      echo "<td style='text-align:left;'>".ucwords($row['name'])."</td>";
      echo "<td>".$row['age']."</td>";
      echo "<td>".$row['vdate']."</td>";
      echo "<td>".$row['problem']."</td>";
      echo "<td>".$row['test']."</td>";
      echo "<td>".$row['n_v_day']."</td>";
      echo "<td>".$row['ref']."</td>";
      echo "<td>"."<a href = perscription.php>Print</a>"."</td>";
      echo "</tr>";
  }
  echo "</table>";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection_read);
 ?>
