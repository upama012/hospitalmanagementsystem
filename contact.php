
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
    <div class="banner">
      <img src="image/b2.jpg" alt="pic"/>
    </div>
	<!--header_two area-->

		<div class="header_two">
		<div class="admin">
		<h2>Hello Admin !</h2>
		</div>
		<div class="button">
		<a href="logout.php"><button id="btn2" class="btn" onclick="ButtonPressed1();">LOGOUT</button></a>
		</div>
		</div>

<div class="signuptable ">
    <table>
    <form action="#" method="POST">
    <h2 style="text-align:center; color: #718022;">Contruct us</h2>
    <tr>
    <td><label for="name">Name:</label></td>
    <td><input type="Name" name="nam" id="name" placeholder="Enter your Name" required /> <br/></td>
    </tr>
    <tr>
    <td><label for="email">Email:</label></td>
    <td><input type="text" name="eml" id="email" placeholder="Enter your Email" required /><br/></td>
    </tr>

    <tr>

    </tr>
    <br/><br/>
    <tr></tr>
    </table>
    <table>
    <tr>
    <td>Comment:</td>
    <td><input type="text-area" name="cmt" placeholder="Comment Hare" height="400px" width="420px"></textarea></td>

    </tr>
    <tr>
    <td>date:</td>
    <td><input type="text" name="tod" id="a3" placeholder="Calender" height="400px" width="420px"></textarea></td>

    </tr>
    </table>
    <table>
    <tr></tr>
    <tr><td></td>
    </table>
    <table>
    <td></td>
    <td><input type="submit" name="submit" value="Send">
    <input type="reset" value="Reset"></td>
    </tr>
    </form>
    </table>
</div>
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
  $nme = $_POST['nam'];
  $emal = $_POST['eml'];
  $comnt = $_POST['cmt'];
  $date = $_POST['tod'];
  $check_mail = "/([a-z0-9_])+\@+([a-z])+(\.)+([a-z]{2,6})/";
  if(preg_match($check_mail,$email)){
    echo "valid email ID";
  }else{
    echo " Invalid email ID";
  }

  if (!mysqli_connect_errno()) {
      $visibility = 1;
    $query = "INSERT INTO contact (`name`,`email`,`comment`,`date`,`visible`)
             VALUES('{$nme}','{$emal}','{$comnt}','{$tod}','{$visibility}')";
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
//READ DATA FROM DATABASE USING PHP

require('db.php');
  if (!mysqli_connect_errno()) {
    $query = "SELECT * FROM contact WHERE `visible` = 1";
    $result = mysqli_query($connection, $query);
    if($result){
      echo "<div id='tableContainer' class='tableContainer'>";
      echo "<table border='0' cellpadding='0' cellspacing='0' width='100%' class='scrollTable'>";
      echo "<thead class='fixedHeader'>";
      echo "<tr>";
      echo "<th width='10%'>"."Sl_No"."</th>";
      echo "<th width='10%'>"."Unique_ID"."</th>";
      echo "<th width='10%'>"."name"."</th>";
        echo "<th width='10%'>"."email"."</th>";
      echo "<th width='10%'>"."comment"."</th>";
      echo"<th width='10%'>"."date"."</th>";

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
      echo "<td width='5%'>".$row1['name']."</td>";
        echo "<td width='5%'>".$row1['email']."</td>";
      echo "<td width='5%'>".$row1['comment']."</td>";
      echo "<td width='5%'>".$row1['date']."</td>";
;
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
