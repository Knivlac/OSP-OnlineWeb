HOW ITEM AND USER MANAGEMENT WORKS : 

so basically the admin can use the interface provided to do communication and manipulation of the tables in the database, we have created a form that reads and transmit data through php and the php sends and SQL commands which will adapt to whatever the admin wanna inputs. The data transmitted are labeled with ID and php Catches them with GET Function which allows the variables to be stored and the SQL commands can be updated with the stored data in the variables.

For Example from itemDisplay.php : 

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

This code will send the data to itemControl.php which the data will be caught by this code with GET method: 

	$ISBN = $_GET['ISBN'];
	$title = $_GET['title'];
	$author = $_GET['author'];
	$cover = $_GET['cover'];
	$price = $_GET['price'];
	$genre = $_GET['genre'];
	$description = $_GET['description'];
	$cmd = $_GET['cmd'];

Then it will check which commands it needs to run. Either save, edit, or delete: 

	if($cmd =="submit"){
		if(empty($ISBN && $title && $author && $cover && $price && $genre && $description)){
			die("Please do not leave anything empty");
		}else{
			$sql = "INSERT INTO booknew(ISBN,title,author,cover,price,genre,description) VALUES('$ISBN','$title','$author','$cover','$price','$genre','$description')";
			mysqli_query($con,$sql);
		}
	}else if($cmd == "edit"){
			$sql = "UPDATE booknew SET ISBN= '$ISBN', title='$title', author='$author', cover='$cover', price='$price', genre='$genre', description='$description' WHERE ISBN= '$ISBN'";
			
			mysqli_query($con,$sql);
	}else if ($cmd == "delete") {
		$sql = "DELETE FROM booknew WHERE ISBN='$ISBN'";
		
		header("location: itemDisplay.php");
		mysqli_query($con,$sql);
	}

Now pay attention to the SQL code : 

	$sql = "INSERT INTO booknew(ISBN,title,author,cover,price,genre,description) VALUES('$ISBN','$title','$author','$cover','$price','$genre','$description')";
				mysqli_query($con,$sql);

In the values section, the variables will be replaced with the data acquired from the form and then execute it, whatever the admin typed into the form will be processed into an SQL query here.

The same also goes for other function with only difference in SQL commands and some extra script to differentiate the function

For Edit:
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

			if($cmd == "edit"){
				$sql = "UPDATE booknew SET ISBN= '$ISBN', title='$title', author='$author', cover='$cover', price='$price', genre='$genre', description='$description' WHERE ISBN= '$ISBN'";
			
			mysqli_query($con,$sql);

The extra script will obtain the data from the specific row where the admin wants to update while also telling itemControl.php the operation it needs to do which is edit/update.


For Delete: 
			function cmd_del(ISBN){
				document.getElementById('ISBN').value = ISBN;
				window.location.href = "itemControl.php?cmd=delete&ISBN=" + ISBN;
			}

			if ($cmd == "delete") {
				$sql = "DELETE FROM booknew WHERE ISBN='$ISBN'";
				
				header("location: itemDisplay.php");
				mysqli_query($con,$sql);
			}

Since we only need to tell the database which rows to delete, we only need one variable of data from the data the admin wish to delete.

The same goes for userControl.php and userDisplay.php, only difference is userControl.php only allows delete.


Displaying Data : 

To display data we first select the data from the specific table then we count how many rows are in it: 

		$sql = "SELECT * FROM booknew";
    	$query = mysqli_query($con,$sql);
    	$row = mysqli_num_rows($query);

Then we make a for loop that will repeat displaying data for every row of data in the table:

			for ($i=0; $i < $row; $i++) { 
    					$result = mysqli_fetch_array($query);
    					$ISBN = $result['ISBN'];
						$title = $result['title'];
						$author = $result['author'];
						$price = $result['price'];
						$genre = $result['genre'];
						$description = $result['description'];
						$cover = $result['cover'];

				<tr>
					<td><?php echo $ISBN ?></td>
					<td><?php echo $title ?></td>
					<td><?php echo $author ?></td>
					<td><?php echo $price ?></td>
					<td><?php echo $genre ?></td>
					<td class="display-desc"><?php echo $description ?></td>
					<td><img src="design/graphic/<?php echo $cover ?>" style="width: 100px; height: 100px;"><label><?php echo $cover ?></label></td>
					<td>
				</tr>
			}

The same is applied On main.php to display item data to the user on the frontpage.

# HOW LOGIN & SIGNUP WORKS

