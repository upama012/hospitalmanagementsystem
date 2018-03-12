<!DOCTYPE html>
<html>
<head>
<title>hms</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="js/clock.js" charset="utf-8"></script>
</head>
<!--body area clock function-->
<body onload="startTime()">
	<!--main area-->
	<div class ="main">
	<!--header area-->
		<div class="header">
			<div id="a1"></div>
			<div class="logo"><img src="image/logo.png" alt="pic"/></div>
			<h2>Hospital management system</h2>
		</div>
		<!--form area-->
		<div class="form">
		<h3>sign up now</h3>
		<form action="#" method="GET">
		<table>
			<tr>
			<td>
			<label for="first-name">first-name:</label></td>
			<td>
			<input type="text" name="fname" id="email" placeholder="email" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="last-name">last-name:</label></td>
			<td>
			<input type="text" name="lname" id="email" placeholder="email" required /><br />
			</td>
			</tr>
		<tr>
		<td>
		<label for="email">email:</label></td>
		<td>
		<input type="text" name="email" id="email" placeholder="email" required /><br />
		</td>
		</tr>
		<tr>
		<td>
		<label for="user">login:</label></td>
		<td>
		<input type="text" name="login" id="pass" placeholder="username" required /><br />
		</td>
		</tr>
		<tr>
		<td>
		<label for="pass">password:</label></td>
		<td>
		<input type="password" name="pws" id="pass" placeholder="password" required /><br />
		</td>
		</tr>
		<tr>
		<td></td>
		<td>
		<a href="doctor.php"><input type="submit" name="submit" value="sign up" onclick="ShowDate();"/></a>
			<script>
			function ShowDate() {
			alert("welcome");
			}
			</script>

		</td>
		</tr>
	</table>
	</form>
	</div>





<?php
require('db.php');
if(isset($_GET['submit'])){
	$fastname=$_GET['fname'];
	$lastname=$_GET['lname'];
  $email=$_GET['email'];
  $login=$_GET['login'];
  $psw=$_GET['pws'];
  $check_mail = "/([a-z0-9_])+\@+([a-z])+(\.)+([a-z]{2,6})/";
  if(preg_match($check_mail,$email)){
    echo "valid email ID";
  }else{
    echo " Invalid email ID";
  }

  if(!mysqli_connect_errno()){
echo"connection to database is successfull !";
    $query ="INSERT INTO register(`first_name`,`last_name`,`email`,`login`,`password`) VALUES('{$fastname}','{$lastname}','{$email}','{$login}','{$psw}')";
    if(mysqli_query($connection,$query))
    {
      echo"data insert into database successfull!";
    }
    else{
      echo"database insert into failed";
    }
  }
    else{
      die("ERROR :".mysql_connect_error());

    }
    mysqli_close($connection);
  }
 ?>
 <div class="footer">
   <div class="copy">
     <p>Webside created&copy; by Amatun Aysha</p>
   </div>
   <div class="folow">
   <a href="www.facebook.com"><img src="image/fb.png" alt="fb"/></a>
   <a href="www.linkdin.com"><img src="image/link.png" alt="link"/></a>
   <a href="www.twitter.com"><img src="image/twt.png" alt="twt"/></a>
   <a href="www.google.com"><img src="image/google.png" alt="gol"/></a>
   </div>
 </div>
 </div>
</body>
</html>
