<?php

$con=mysqli_connect("localhost","dbuser","password","admin");
if(!$con)
  echo "error";
else
  echo "connected";
$s="select * from admin where "
?>


