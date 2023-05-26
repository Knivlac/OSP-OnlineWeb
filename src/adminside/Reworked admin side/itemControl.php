<?php 
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
	if(empty($ISBN && $title && $author && $cover && $price && $genre && $description)){
		die("Please do not leave anything empty");
	}else{
		$sql = "INSERT INTO booknew(ISBN,title,author,cover,price,genre,description) VALUES('$ISBN','$title','$author','$cover','$price','$genre','$description')";

		mysqli_query($con,$sql);	
	}
}else if($cmd == "edit"){
		$sql = "UPDATE booknew SET title='$title', author='$author', cover='$cover', price='$price', genre='$genre', description='$description' WHERE ISBN= '$ISBN'";
		
		mysqli_query($con,$sql);

}else if ($cmd == "delete") {
	$sql = "DELETE FROM booknew WHERE ISBN='$ISBN'";
	
	header("location: itemDisplay.php");
	mysqli_query($con,$sql);
}
?>