<?php

error_reporting(E_ALL ^ E_WARNING); 
$con = mysqli_connect("localhost","root","","bookzone");

$username = $_GET['username'];
$cmd = $_GET['cmd'];

if($cmd == "delete"){
	$sql = "DELETE FROM user WHERE username='$username'";
	header("location: userDisplay.php");
	mysqli_query($con,$sql);
}
?>