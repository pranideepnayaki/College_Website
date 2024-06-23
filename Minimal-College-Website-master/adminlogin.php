<?php

$con=mysqli_connect("localhost","dbuser","password","admin");
$uname=$_POST["uname"];
$pass=$_POST["pass"];

$s="select * from admin where USERNAME='$uname' and PASSWORD='$pass'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num>=1)
{
  header("location: Admin-page.html");
}
else
{
 header("location:Admin-login-error.html");
}
?>