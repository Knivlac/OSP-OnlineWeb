<?php
error_reporting(E_ALL ^ E_WARNING); 

$con = mysqli_connect("localhost","root","","bookzone");

$ISBN = $_GET['ISBN'];
$title = $_GET['title'];
$author = $_GET['author'];
$cover = $_GET['cover'];
$price = $_GET['price'];
$genre = $_GET['genre'];
$description = $_GET['description'];
$cmd = $_GET['cmd'];

if($cmd =="submit"){
		$sql = "INSERT INTO booknew(ISBN,title,author,cover,price,genre,description) VALUES('$ISBN','$title','$author','$cover','$price','$genre','$description')";

		mysqli_query($con,$sql);
}
?>