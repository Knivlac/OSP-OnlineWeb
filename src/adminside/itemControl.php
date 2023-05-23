<?php include "addItem.php"?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="Stylesheet" href="../style.css" />
    <link
        rel="Stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
	<title>Inventory Management</title>
</head>
<body class="login-form">
	<form class="login-form" method="POST" action="addItem.php" id="itemControl">
    <h2>Input Item Data</h2>
		<label>ISBN</label><input type="text" name="ISBN" id="ISBN">
		<label>Title</label><input type="text" name="Title" id="Title">
		<label>Author</label><input type="text" name="Author" id="Author">
		<label>Price</label><input type="number" name="Price" id="Price" step="any">
		<label>Genre</label><input type="text" name="Genre" id="Genre">
		<label>Description</label><input type="text" name="Description" id="Description">

		<button type="submit" name="submit" value="submit">SUBMIT</button>

		<a class="adminLogin" href="adminControl.html">Back</a>
	</form>
</body>
</html>