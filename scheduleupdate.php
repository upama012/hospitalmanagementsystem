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
        <a href="appoin.php">appoinment</a>
          <a href="accounts.php">aaccounts</a>
          <a href="noticeboard.php">noticeboard</a>
        <a href="about.php">About</a>
        


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
		<h2>update schedule list : </h2>
		</div>
    <?php
    //PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
    //CODED BY : amatun aysha
    //DATABASE NAME : php
    //Table Name :doctor
    //DATE :
  require('db.php');
    $id = $_GET['id'];
    if (!mysqli_connect_errno()){
      $query = "SELECT `doctor_name`,`specialzation`,`available_time`,`available_days`,`patient_fees` FROM schedule WHERE `id`='{$id}' ";
      $result = mysqli_query($connection,$query);
      if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        $doctor_name=$row['doctor_name'];
        $specialzation=$row['specialzation'];
        $available_time=$row['available_time'];
        $available_days=$row['available_days'];
        $patient_fees=$row['patient_fees'];
      }
    }else{
      echo "ERROR : Database connection failed !"."<br>";
    }



    //Update the data and Save it into the MySQL database;
    if (isset($_POST['submit'])) {
      $docn = $_POST['docn'];
      $sp = $_POST['sp'];
      $time = $_POST['time'];
      $ad =$_POST['ad'];
      $ppf =$_POST['ppf'];
      if (!mysqli_connect_errno()) {
        $visibility = 1;
        $query = "UPDATE schedule SET `doctor_name`='{$docn}',`specialzation`='{$sp}',
                 `available_time`='{$time}',`available_days`='{$ad}',`patient_fees`='{$ppf}' WHERE `id`='{$id}' ";
        if(mysqli_query($connection, $query)){
          echo "<b><script>alert('SUCCESS : Data update successfully');</script></b>";
          echo "<script>window.location.href = 'schedule.php'</script>";
        }else{
          echo "Database Insert Failed";
        }
      }else{
        die("ERROR : ".mysqli_connect_error());
      }
      mysqli_close($connection);
    }
    ?>

    <div id="form_div">
      <form action="#" method="POST">
			<table>
				<tr>
			<td>
			<label for="sn">Serial No:</label></td>

			</tr>
			<tr>
			<td>
			<label for="dn">Doctor Name:</label></td>
			<td>
			<input type="" name="docn" id="dn" value="<?php echo $doctor_name;?>" placeholder="Doctor Name" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="sp">Specialzation:</label></td>
			<td>
			<input type="" name="sp" id="sp" value="<?php echo $specialzation;?>" placeholder="Specalization" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="tm">Available Time:</label></td>
			<td>
			<input type="" name="time" id="tm" value="<?php echo $available_time;?>" placeholder="10:00AM" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="dt">Available Days:</label></td>
			<td>
			<input type="text" name="ad" id="a3" value="<?php echo $available_days;?>" placeholder="monday"><br />
			</td>
			</tr>

      <tr>
      <td>
      <label for="dt">per patient fees:</label></td>
      <td>
      <input type="text" name="ppf" id="a3" value="<?php echo $patient_fees;?>" placeholder=""><br />
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
    <div class="php">

  </div>
    <div class="footer">
      <div class="copy">
        <p>Webside created&copy; by Amatun Aysha With Ayerin Neshat</p>
      </div>
      <div class="folow">
      <a href="www.facebook.com"><img src="image/fb.png" alt="fb"/></a>
      <a href="www.linkdin.com"><img src="image/link.png" alt="link"/></a>
      <a href="www.twitter.com"><img src="image/twt.png" alt="twt"/></a>
      <a href="www.google.com"><img src="image/google.png" alt="gol"/></a>
      </div>
    </div>


  </body>
</html>
