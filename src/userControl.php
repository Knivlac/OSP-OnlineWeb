<?php

error_reporting(E_ALL ^ E_WARNING); 
$con = mysqli_connect("localhost","root","","bookzone");

$userID = $_GET['userID'];
$cmd = $_GET['cmd'];

if($cmd == "delete"){
	$sql = "DELETE FROM user_info WHERE userID='$userID'";

	header("location: userDisplay.php");
	mysqli_query($con,$sql);
}
?>