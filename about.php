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
<div class="cont">
<div class="cvv">
    <div id="img">
    <img src="image/ayerin.jpg" alt="profile_pic"/>
    </div>

    <div id="img_content">
    <h1>Ayerin Neshat</h1>
    		<h2>web developer/designer</h2>
    		<p><b>address:</b>Ghasipara, sadar dinajpur.</p>
    		<p><b>email:</b>ayerinneshat78@gmail.com</p>
    		<p><b>mobile:</b>01762902847</p>
    </div>
  </div>
</br>
<div class=cv>
    <div id="img">
    <img src="image/aysha.jpg" alt="profile_pic"/>
    </div>

    <div id="img_content">
    <h1>Amatun Aysha</h1>
    		<h2>web developer/designer</h2>
    		<p><b>address:</b>mohajonpara,Newtown sadar dinajpur.</p>
    		<p><b>email:</b>amatunaysha@gmail.com</p>
    		<p><b>mobile:</b>01725932105</p>
    </div>
  </div>
  <div class="cvp">
    <h3>our honarable Instractor</h3>
      <div id="img">
      <img src="image/suman_gangopadhyay_VISA_photo.jpg" alt="profile_pic"/>
      </div>

      <div id="img_content">
      <h1>SUMAN GANGOPADHYAY</h1>
      		<h2>web developer&designer</h2>
      		<p><b>address:</b></p>
      		<p><b>email:</b>@gmail.com</p>
      		<p><b>mobile:</b>017</p>
      </div>
    </div>
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
