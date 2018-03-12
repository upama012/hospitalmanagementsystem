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

	<!--app area-->

	<div class="app">
		<div class="appt_list">
		<h2>Health Tips: </h2>
		</div>
		<div id="a2" title="add new record">
      <form action="#" method="POST">


				<table id="tbl">

			<tr>
			<td>
			<label for="pn">title:</label></td>
			<td>
			<input type="" name="pan" id="pn" placeholder="title" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="dn">Description</label></td>
			<td>
			<input type="" name="docn" id="dn" placeholder="description" required /><br />
			</td>
			</tr>
			<tr>
			<td>
			<label for="f/m">start-date:</label></td>
			<td>
			<input type="" name="tod" id="f/m" placeholder="date" required /><br />
			</td>
			</tr>

			<tr>
			<td>
			<label for="dt">end-Date:</label></td>
			<td>
			<input type="text" name="tod" id="a3" placeholder="Click for the Calendar"><br />
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
<div class="notice">
<h2>Healthy Lifestyle Tips to Start Your Day With</h2>
<p>Healthy lifestyle is a hot topic in the health industry today and why not? After indulging ourselves in unhealthy foods and sedentary lifestyles, our generation has become a heap of the obese population.

This resulted in a number of diseases like Diabetes, hypertension, and heart diseases. So now when the bar rose above our control limit, we are desperately trying to solve things.
And healthy lifestyle and healthy foods to eat are the two major pillars we need to build. In fact, a few healthy lifestyle tips can go a long way in improving your overall health and mental well-being.
Therefore, in order to help you more in finding a variety of good health tips, we bring to you 5 major healthy lifestyle tips that you ought to know.

Looking for a healthy diet plan but too confused to understand where to start? Talk to us and get yourself a personalised Nutritionist to give you the best healthy diet plans.</p>
<img src="image/health.jpg" alt="health"/>
<h2>What happens when you completely skip carbohydrates?</h2>

<p>If you stop eating carbohydrate, you rapidly lose water weight as your body breaks down the stored carbohydrates,” explains Darwin Deen, MD, Senior attending physician at Montefiore Medical Centre’s Department of Family and Social Medicine in the Bronx, New York. ” The problem is that a low-carbohydrate diet is not a normal balance of physiologic nutrition.

As soon as you start eating carbohydrates again, your body replenished your carbohydrate stores and your weight comes back. So it is always advisable to have everything as per the required allowance.”

Consume more of fruits and vegetables: Aim to reach at least 5 servings of fruits and vegetables in a day because that is the recommended amount to keep lifestyle diseases at bay.</p>

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
