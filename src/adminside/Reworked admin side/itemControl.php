<?php 
$con = mysqli_connect("localhost","root","","bookzone");

$ISBN = $_GET['ISBN'];
$title = $_GET['title'];
$author = $_GET['author'];
$price = $_GET['price'];
$genre = $_GET['genre'];
$description = $_GET['description'];
$cmd = $_GET['cmd'];

if($cmd =="submit"){
	if(empty($ISBN && $title && $author && $price && $genre && $description)){
		die("Please do not leave anything empty");
	}else{
		$sql = "INSERT INTO book(ISBN,title,author,price,genre,description) VALUES('$ISBN','$title','$author','$price','$genre','$description')";

		mysqli_query($con,$sql);
	}
}else if($cmd == "edit"){
		$sql = "UPDATE book SET title='$title', author='$author', price='$price', genre='$genre', description='$description' WHERE ISBN= '$ISBN'";
		
		mysqli_query($con,$sql);

}else if ($cmd == "delete") {
	$sql = "DELETE FROM book WHERE ISBN='$ISBN'";
	
	header("location: itemDisplay.php");
	mysqli_query($con,$sql);
}
?>