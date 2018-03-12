<?php
session_start();
require('db.php');
if(isset($_POST['submit'])) {
  $visibility = 1;
  $myusername = mysqli_real_escape_string($connection,$_POST['username']);
  $mypassword = mysqli_real_escape_string($connection,$_POST['password']);
  $sql = "SELECT `id` FROM register WHERE `email`= '{$myusername}' and `password` = '{$mypassword}' AND `visible` = '{$visibility}'";
  $result = mysqli_query($connection,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  $count = mysqli_num_rows($result);
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
    $_SESSION['login_user'] = $myusername;
    header("location: home.php");
  }else {
    echo "<script>alert('Your Login Name or Password is invalid');</script>";
  }
}
?>
<?php
require('index.html');

?>
<div class="footer">
  <div class="copy">
    <p>Webside created&copy; by Amatun Aysha With Ayerin Neshat</p>
  </div>
  <div class="folow">
  <a href="www.facebook.com"><img src="image/fb.png" alt="fb"/></a>
  <a href="www.linkdin.com"><img src="image/link.png" alt="link"/></a>
  <a href="www.twitter.com"><img src="image/twt.png" alt="twt"/></a>

  <a href="www.google.com"><img src="image/google.png" alt="gol"/></a>
    <a href="www.google.com"><img src="image/ict.png" alt="gol"/></a>
  </div>
</div>
