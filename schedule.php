<?php
require('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>appt</title>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/clock.js" charset="utf-8"></script>
  <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="jquery/jquery-ui.js"></script>
	<script>
      function DialogBox(){
        $( function() {
        $( "#a2" ).dialog();
      });
      }
    </script>
    <script>
      $( function() {
        $( "#a3" ).datepicker({
          changeMonth:true,
          changeYear: true
        });
      });
    </script>
</head>
<!--body clock area-->
<body onload="startTime()">
	<div class ="main">
    <!--menu area-->

<div class="menu">
      <div class="topnav">
        <a  href="home.php">Home</a>
        <a href="doctor.php">doctor</a>
        <a href="schedule.php">schedule</a>
        <a href="patient.php">patient</a>
        <a href="prescriptionlist.php">patient Info</a>
        <a href="appoin.php">appoinment</a>
        <a href="health.php">health tips</a>
        <a href="about.php">About</a>
        <a href="contact.php">contact</a>

      </div>
</div>
		<!--header area-->
	<div class="header">
		<div id="a1"></div>
		<div class="logo"><img src="image/logo.png" alt="pic"/></div>
		<h2>Hospital management system</h2>
	</div>
  <!--header_two area-->
  <div class="banner">
    <img src="image/b2.jpg" alt="pic"/>
  </div>
    <div class="header_two">
    <div class="admin">
    <h2>Hello Admin !</h2>
    </div>
    <div class="button">
    <a href="logout.php"><button id="btn2" class="btn" onclick="ButtonPressed1();">LOGOUT</button></a>
    </div>
    </div>
	<!--app area-->

	<div class="app">
		<div class="appt_list">
		<h2>schedule list : </h2>
		</div>
		<div id="a2" title="add new record">
      <form action="#" method="POST">
			<table>
			<tr>
			<td>
			<label for="dn">Doctor Name:</label></td>
			<td>
			<input type="" name="docn" id="dn" placeholder="Doctor Name" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="sp">Specialzation:</label></td>
			<td>
			<input type="" name="sp" id="sp" placeholder="Specalization" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="tm">Available Time:</label></td>
			<td>
			<input type="" name="time" id="tm" placeholder="10:00AM" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="dt">Available Days:</label></td>
			<td>
			<input type="text" name="ad" id="a3" placeholder="Click for the Calendar"><br />
			</td>
			</tr>

      <tr>
      <td>
      <label for="dt">per patient fees:</label></td>
      <td>
      <input type="text" name="ppf" id="a3" placeholder=""><br />
      </td>
      </tr>
			<tr>
			<td></td>
			<td>
			<input type="submit" name="submit" value="submit" onclick="ShowDate();"/>


			</td>
			</tr>
			</table>
      </form>
		</div>
			 <div id="add">
			 <button id="btn1" onclick="DialogBox();">AddNew</button>
			 </div>
	</div>
    <div class="appoinment">
  <?php

  require('cfunction.php');
  //PROGRAM : PHP program to Insert and Read from MySQL database
  //CODED BY :amatun
  //DATE : 20-July-2014
  //DATABASE NAME : php
  //Table Name : appoin
  //WRITE INTO THE DATABAS
  require('db.php');
  if (isset($_POST['submit'])) {
    $dname = $_POST['docn'];
    $specialzation = $_POST['sp'];
      $avilable_days = $_POST['ad'];
    $avilabletime = $_POST['time'];
    $parpafee = $_POST['ppf'];

    if (!mysqli_connect_errno()) {
      $visibility = 1;
      $query = "INSERT INTO schedule (`doctor_name`,`specialzation`,`available_days`,`available_time`,`patient_fees`,`visible`)
               VALUES('{$dname}','{$specialzation}','{$avilable_days}','{$avilabletime}','{$parpafee}','{$visibility}')";
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

      $query = "SELECT * FROM schedule  WHERE `visible` = 1 " ;
      $result = mysqli_query($connection, $query);
      if($result){
        echo "<div id='tableContainer' class='tableContainer'>";
        echo "<table border='0' cellpadding='0' cellspacing='0' width='100%' class='scrollTable'>";
        echo "<thead class='fixedHeader'>";
        echo "<tr>";
        echo "<th width='10%'>"."Sl_No"."</th>";
        echo "<th width='10%'>"."Unique_ID"."</th>";

        echo "<th width='10%'>"."doctor_name"."</th>";
          echo "<th width='10%'>"."Speacialzation"."</th>";
        echo "<th width='10%'>"."Available_time"."</th>";

        echo "<th width='10%'>"."Available_days"."</th>";
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

        echo "<td width='10%'>".$row1['doctor_name']."</td>";
          echo "<td width='10%'>".$row1['specialzation']."</td>";
        echo "<td width='10%'>".$row1['available_time']."</td>";
        echo "<td width='10%'>".$row1['available_days']."</td>";

        echo "<td width='10%'>"."<a href = 'scheduleupdate.php?id=$id' id='update'>EDIT</a>"."</td>";
        echo "<td width='10%'>"."<a href = 'scheduledelete.php?id=$id' id='delete'>DEL</a>"."</td>";
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
