<?php
error_reporting(0);
session_start(); 

$name=$_POST["name"];
$email=$_POST["email"];
$phn=$_POST["phn"];

$con=mysqli_connect("localhost","dbuser","password","admin");

$s="INSERT INTO STUDENTS VALUES('$name','$email','$phn')";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
  header("location: landing-page.html");

?>




