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
		<!--header_two area-->

		<div class="header_two">
		<div class="admin">
      <h2>Hello Admin !</p]>
		</div>
		<div class="button">
		<a href="logout.php"><button id="btn2" class="btn" onclick="ButtonPressed1();">LOGOUT</button></a>
		</div>
		</div>
    <div class="banner">
      <img src="image/b2.jpg" alt="pic"/>
    </div>
      <div id="home">
        <marquee><h1> Wellcome to our Hospital</h1></marquee><br>
        <h3>ঢাকা মেডিকেল কলেজের প্রারম্ভিক পরিস্থিতি</h3>
        <p>ঢাকা মেডিকেল কলেজ গঠনের প্রাক্কালে স্থাপিত কমিটির প্রধান ডব্লিউ জে ভারজিন এর উপরেই ন্যস্ত হয় ঢাকা মেডিকেল কলেজের পরিচালনার গুরুদায়িত্ব। শুরুতে এনাটমি ও ফিজিওলজি ডিপার্টমেন্ট না থাকায় ঢাকা মেডিকেল কলেজের শিক্ষার্থীদের মিটফোর্ড মেডিকেল স্কুলে ক্লাস করতে হত। একমাস পর এনাটমি বিভাগের অধ্যাপক পশুপতি বসু এবং ফিজিওলজি বিভাগে অধ্যাপক হীরালাল সাহা শিক্ষক হিসেবে যোগদানের পর হাসপাতালে ২২ নং ওয়ার্ডে ক্লাস শুরু হয়। তখন ছিল না কোন লেকচার গ্যালারি বা ডিসেকশান হল। ১৯৫৫ সালে কলেজ ভবন স্থাপনের পর সেই অভাব পূরণ হয়।

এছাড়াও ঢাকা মেডিকেল কলেজের শিক্ষাদানের পথিকৃতেরা ছিলেন ফরেনসিক মেডিসিনের ডাঃ এম হোসেন, ফার্মাকোলজি বিভাগে প্রফেসর আলতাফ আহমেদ, প্যাথলজি বিভাগে প্রফেসর আনোয়ার আলী এবং ডাঃ কাজী আবদুল খালেক, স্ত্রীরোগ ও প্রসূতিবিদ্যায় প্রফেসর হাবিব উদ্দিন আহমেদ ও প্রফেসর হুমায়রা সাঈদ, মেডিসিন বিভাগে অধ্যাপক নওয়াব আলী ও প্রফেসর মোঃ ইব্রাহীম, সার্জারি বিভাগে প্রফেসর মেজর এফ ডব্লিউ এলিসন, প্রফেসর ই ভন নোভাক, লেঃ কর্নেল গিয়াস উদ্দিন এবং প্রফেসর আমির উদ্দিন প্রমুখ।</p>
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
