<?php
  $email = "osman@gmail.com";
  $check_mail = "/([a-z0-9_])+\@+([a-z])+(\.)+([a-z]{2,6})/";

  if(preg_match($check_mail,$email)){
    echo "valid email ID";
  }else{
    echo " Invalid email ID";
  }
?>
01725932103
01543262892
<?php
$mobile = "01832037794";
$airtel = "/016/";
$gp = "/017/";
$robi = "/018/";
$bl = "/019/";
$teletalk = "/015/";
if (preg_match($airtel,$mobile)){
  echo"BD Airtel Number";
}elseif (preg_match($gp,$mobile)){
  echo"BD Grammenphone Number";
}elseif (preg_match($robi,$mobile)){
  echo"BD robi Number";
}elseif (preg_match($bl,$mobile)){
  echo"BD Banglalink Number";
}elseif (preg_match($teletalk,$mobile)){
  echo"BD teletalk Number";
}else{
  echo"Either invalid number of city cell mobile umber";
}
 ?>
