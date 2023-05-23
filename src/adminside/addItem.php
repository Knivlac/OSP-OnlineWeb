<?php

$con = mysql_connect("localhost","root","","bookzone");

$ISBN = $_POST['ISBN'];
$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$genre = $_POST['genre'];
$description = $_POST['description'];

$sql = "insert into book(ISBN,title,author,price,genre,description) values('$ISBN','$title','$author','$price','$genre','$description')";

mysqli_query($con,$sql);



