<?php
function mysql_date($date){
  $conv = date("Y-m-d",strtotime($date));
  return $conv;
}
function php_date($date){
  $conv = date("d-m-Y",strtotime($date));
  return $conv;
}
 ?>
