<?php include 'itemControl.php';
error_reporting(E_ALL ^ E_WARNING); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="Stylesheet" href="design/admin_the_style.css" 
	/>
    <link
        rel="Stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
	<title>Inventory Management</title>
	<script>
    	function cmd_edit(ISBN,title,author,cover,price,genre,description){
    		document.getElementById('ISBN').value = ISBN;
    		document.getElementById('title').value = title;
    		document.getElementById('author').value = author;
    		document.getElementById('price').value = price;
    		document.getElementById('genre').value = genre;
    		document.getElementById('description').value = description;
			document.getElementById('cover').value = cover;
    		document.getElementById('cmd').value = "edit";
    	}
		function cmd_del(ISBN){
			document.getElementById('ISBN').value = ISBN;
			window.location.href = "itemControl.php?cmd=delete&ISBN=" + ISBN;
		}
	</script>
</head>
<body>
	<div class="banner">
      	<a href="../main.php"><img class="logo" src="design/graphic/Sprite-Logo.png"/></a>
    </div>

	<div class="input-div">
    	<h2 style="color: white">Input/Edit Item Data</h2>
		<br>
		<form class="input-form" method="GET" autocomplete="off">
			<label>ISBN</label><input type="text" name="ISBN" id="ISBN">
			<label>Title</label><input type="text" name="title" id="title">
			<label>Author</label><input type="text" name="author" id="author">
			<label>Price</label><input type="number" name="price" id="price" step="any">
			<label>Genre</label><input type="text" name="genre" id="genre">
			<label>Cover</label><input type="text" name="cover" id="cover">
			<br>
			<div class="tall-guys">
				<label>Description</label><textarea type="text" name="description" id="description"></textarea>
			</div>
			<input type="submit" id="cmd" name="cmd" value="submit">
		</form>
	</div>
	
	<div class="display-list">
    	<h2>Currently In Display</h2>
    	<table>
    		<thead>
	    		<tr>
	    			<th>ISBN</th>
	    			<th>Title</th>
	    			<th>Author</th>
	    			<th>Price</th>
	    			<th>Genre</th>
	    			<th class="display-desc">Description</th>
					<th>Cover</th>
	    			<th class="display-sakanaction" colspan="2">Action</th>
	    		</tr>
    		</thead>
    		<tbody>
    			<?php 
    				$sql = "SELECT * FROM booknew";
    				$query = mysqli_query($con,$sql);
    				$row = mysqli_num_rows($query);

    				for ($i=0; $i < $row; $i++) { 
    					$result = mysqli_fetch_array($query);
    					$ISBN = $result['ISBN'];
						$title = $result['title'];
						$author = $result['author'];
						$price = $result['price'];
						$genre = $result['genre'];
						$description = $result['description'];
						$cover = $result['cover'];
				?>
				<tr>
					<td><?php echo $ISBN ?></td>
					<td><?php echo $title ?></td>
					<td><?php echo $author ?></td>
					<td><?php echo $price ?></td>
					<td><?php echo $genre ?></td>
					<td class="display-desc"><?php echo $description ?></td>
					<td><img src="design/graphic/<?php echo $cover ?>" style="width: 100px; height: 100px;"><label><?php echo $cover ?></label></td>
					<td>
					<input type="submit" name="cmd" id="cmd_del" value="delete" onclick="cmd_del(<?php echo "'$ISBN'"?>)">
					</td>
					<td>
					<input type="submit" name="cmd" id="cmd_edit" value="edit" onclick="cmd_edit(<?php echo "'$ISBN','$title','$author','$cover','$price','$genre','$description'"?>)">
					</td>
				</tr>
    			<?php } ?>
    		</tbody>
    	</table>
    	<a class="adminLogin" href="adminControl.php">Back</a>
	</div>
</body>
</html>
