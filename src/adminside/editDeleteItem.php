<?php 
$con = mysql_connect("localhost","root","","bookzone");

session_start();

$ISBN = '';
$title = ''; 
$author = '';
$price = '';
$genre = '';
$description = '';
$update = false; 

if(isset($_GET['delete'])){
	$ISBN = $_GET['delete'];

	$conn->query("DELETE FROM book WHERE ISBN=$ISBN");
	header("location:itemDisplay.php");
}

if(isset($_GET['edit'])){
	$ISBN = $_GET['edit'];
	$update = true;
	$result = $conn->query("SELECT * FROM book WHERE ISBN=$ISBN");
	if (count($result)==1) {
		$row = $result->fetch_array();
		$ISBN = $row['ISBN'];
		$title = $row['title'];
		$author = $row['author'];
		$price = $row['price'];
		$genre = $row['genre'];
		$description = $row['description'];
	}
	header("location:itemDisplay.php");
}
?>