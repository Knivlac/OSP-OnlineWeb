<?php include 'addItem.php';?>
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
	<title>Inventory Display</title>
	<script type="text/javascript">
		function cmd_edit(argument) {
			// body...
		}
	</script>
</head>
<body class="login-form">
	<div class="login-form">
		<div>
      		<a href="../main.html"><img class="logo" src="../graphic/Sprite-Logo.png"/></a>
    	</div>
    	<h2>Currently In Display</h2>
    	<table>
    		<thead>
	    		<tr>
	    			<th>ISBN</th>
	    			<th>Title</th>
	    			<th>Author</th>
	    			<th>Price</th>
	    			<th>Genre</th>
	    			<th>Description</th>
	    			<th colspan="2">Action</th>
	    		</tr>
    		</thead>
    		<tbody>
    			<?php 
    				$sql = "SELECT * FROM book";
    				$query = mysqli_query($con,$sql);
    				$num = mysqli_num_rows($query);

    				for ($i=0; $i < num; $i++) { 
    					$result = mysqli_fetch_array($query);
    					$ISBN = $result['ISBN'];
						$title = $result['title'];
						$author = $result['author'];
						$price = $result['price'];
						$genre = $result['genre'];
						$description = $result['description'];
				?>
				<tr>
					<td><?php echo $ISBN ?></td>
					<td><?php echo $title ?></td>
					<td><?php echo $author ?></td>
					<td><?php echo $price ?></td>
					<td><?php echo $genre ?></td>
					<td><?php echo $description ?></td>
					<td>
						<a href="editDeleteItem.php?edit=<?php echo $row['ISBN']; ?>">Edit</a>
					</td>
					<td>
						<a href="editDeleteItem.php?delete=<?php echo $row['ISBN']; ?>">Delete</a>
					</td>
				</tr>
    			<?php } ?>
    		</tbody>
    	</table>
    	<a class="adminLogin" href="adminControl.html">Back</a>
	</div>
</body>
</html>