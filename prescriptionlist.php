<!DOCTYPE html>
<html>
<head>
<title>appt</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/clock.js" charset="utf-8"></script>
<script src="jquery/jquery-3.1.0.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
      $( function() {
        $( "#a3" ).datepicker({
          changeMonth:true,
          changeYear: true
        });
      });
    </script>
    <script src="jquery/jquery-ui.js"></script>
	<script>
      function DialogBox(){
        $( function() {
        $( "#a2" ).dialog();
      });
      }
    </script>
</head>
<!--body  clock area-->
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
  <div class="banner">
    <img src="image/b2.jpg" alt="pic"/>
  </div>
		<!--header_two area-->

		<div class="header_two">
		<div class="admin">
      <h2>Hello Admin !</p]>
		</div>
		<div class="button">
		<a href="logout.php"><button id="btn2" class="btn" onclick="ButtonPressed1();">LOGOUT</button></a>
		</div>
		</div>

	<!--app area-->

	<div class="app">
		<div class="appt_list">
      <h2>patient information</h2>

		</div>
				<div id="a2" title="add new record">
        <form action="#" method="POST">
				<table>
			<tr>
			<td>
			<label for="pn">Patient Name:</label></td>
			<td>
			<input type="" name="pname" id="pn" placeholder="Patient Name" required /><br />
			</td>
			</tr>

      <tr>
      <td>
      <label for="pn">age:</label></td>
      <td>
      <input type="" name="ag" id="pn" placeholder="doctor Name" required /><br />
      </td>
      </tr>
			<tr>
			<td>
			<label for="ad">Visiting date:</label></td>
			<td>
			<input type="text" name="tod" id="a3" placeholder="Click for the Calendar"><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="f/m">problem test</label></td>
			<td>
			<input type="" name="pbt" id="f/m" placeholder="female/male" required /><br />
			</td>
    </tr>
    <tr>
    <td>
    <label for="f/m">digise</label></td>
    <td>
    <input type="" name="dis" id="f/m" placeholder="female/male" required /><br />
    </td>
  </tr>
    <tr>
    <td>
    <label for="pn">next visiting date</label></td>
    <td>
    <input type="text" name="tod" id="a3" placeholder="Click for the Calendar"><br />
    </td>
    </tr>

			<tr>
			<td></td>
			<td>
			<input type="submit" name="submit" value="submit" onclick="ShowDate();"/>
			<script>
			function ShowDate() {
			alert("successfull !!!");
			}


			</script>

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
  //PROGRAM : CRUD operation on hospital management project
  //CODED BY : amatun
  //DATE : 2-Feb-2018
  //DATABASE NAME : php
  //Table Name : doctors
  //Read INTO THE DATABASE
  require('db.php');
  require('cfunction.php');
  if (isset($_POST['submit'])) {
    $tod=$_POST['tod'];
    $tod=mysql_date($tod);
    $paname = $_POST['pname'];
    $age = $_POST['ag'];
    $visiting = $_POST['tod'];
    $problem = $_POST['pbt'];
    $test_digs = $_POST['dis'];
    $next_date = $_POST['tod'];
    if (!mysqli_connect_errno()) {
      $visibility = 1;
      $query = "INSERT INTO patient_info (`patient_name`,`age`,`visible`, `visiting_date`,`problem_test`,`test_digise`,`next_visiting_date`)
               VALUES('{$paname}', '{$age}', '{$visibility}','{$tod}','{$problem}','{$test_digs}','{$next_date}')";
      if(mysqli_query($connection, $query)){
        echo "successfull !";
      }else{
        echo "Database Insert Failed";
      }
    }else{
      die("ERROR : ".mysqli_connect_error());
    }
  }
    if (!mysqli_connect_errno()) {
      $query = "SELECT * FROM patient_info WHERE `visible` = 1";
      $result = mysqli_query($connection, $query);
      if($result){
        echo "<div id='tableContainer' class='tableContainer'>";
        echo "<table border='0' cellpadding='0' cellspacing='0' width='100%' class='scrollTable'>";
        echo "<thead class='fixedHeader'>";
        echo "<tr>";
        echo "<th width='10%'>"."Sl_No"."</th>";
        echo "<th width='10%'>"."Unique_ID"."</th>";
        echo "<th width='10%'>"."patient_name"."</th>";
        echo "<th width='10%'>"."age"."</th>";
          echo "<th width='10%'>"."visiting date"."</th>";
        echo "<th width='10%'>"."problem test"."</th>";
        echo "<th width='10%'>"."test_digise"."</th>";
        echo "<th width='10%'>"."next_visiting_date"."</th>";
        echo"<th width='10%'>"."print"."</th>";

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
        echo "<td width='10%'>".$sl_no."</td>";
        echo "<td width='10%'>".$row1['id']."</td>";
        echo "<td width='10%'>".ucwords($row1['patient_name'])."</td>";
        echo "<td width='10%'>".$row1['age']."</td>";
          echo "<td width='10%'>".$row1['visiting_date']."</td>";
        echo "<td width='10%'>".$row1['problem_test']."</td>";
        echo "<td width='10%'>".$row1['next_visiting_date']."</td>";
        echo "<td width='10%'>"."<a href = perscription.php>Prescription</a>"."</td>";

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
</div>
</body>

</html>
