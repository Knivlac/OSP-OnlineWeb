# HOW ADMIN'S ITEM AND USER MANAGEMENT WORK: 

So basically the admin can use the interface provided to do communication and manipulation of the tables in the database, we have created a form that reads and transmit data through php and the php sends and SQL commands which will adapt to whatever the admin wanna inputs. The data transmitted are labeled with ID and php Catches them with GET Function which allows the variables to be stored and the SQL commands can be updated with the stored data in the variables.

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

# HOW LOG IN WORKS
First, we get the user input of their `username` and `password` with a post method html form and send it to [userLogin.php](../src/userLogin.php) and declare the value of input into a variable:
	
		$userName = $_POST['userName'];
		$pass = $_POST['userPassword'];

Secondly, we check if the value is empty or not, if it's empty, the user will be shown an error

		if (empty($userName)) {
		header("Location: login.php?error=User Name is required");
		    exit();
		}else if(empty($pass)){
		header("Location: login.php?error=Password is required");
		    exit();
	
Otherwise, the `username` and `password` will be query if it matches the database 

		$sql = "SELECT userName, userPassword 
		FROM user_info 
		WHERE userName='".$userName."' AND userPassword='".$pass."'";

In the case of it matching the database, it will save its result into the $result variable, 
then count if theres 1 or 0 matching row and save it into the $count variable,
		
		$result = mysqli_query($conn, $sql);

		$count = mysqli_num_rows($result);
		
If there is one row that matches, it will fetch the result into the `if` statement and compare again because this is another function.
When both the `username` and `password` matches, it will assign the `username` and `password` into the current session
		
		if ( $count == 1) {
			$row = mysqli_fetch_assoc($result);
		    if ($row['userName'] === $userName && $row['userPassword'] === $pass) {
			$_SESSION['userName'] = $row['userName'];
			$_SESSION['id'] = $row['id']; 
			header("Location: main.php");
				exit();
				
In the case of no matches in the database, it will just set a `$_GET` value which shows the corresponding error

	header("Location: login.php?error=Incorect  name or password");
#
# HOW SIGN IN WORKS
With the first few steps being the same as `log in function`, we will skip through how it assigns users input into a variable 
and checks if the user's input is empty. With the key difference of what input we took, which includes:

1. First Name
2. Last Name
3. Email
4. Username
5. Password
6. Re-entering Password (which gives an error if it's not the same as the password)

Feel free to skip this section of the code.


		$firstName = $_POST['firstName'];
		  $lastName = $_POST['lastName'];
		  $email = $_POST['email'];
		  $userName = $_POST['userName'];
		  $userPassword = $_POST['userPassword'];
		  $userPasswordRE = $_POST['userPasswordRE'];

		  if (empty($firstName)) {
		    header("location: signUp.php?error=First Name is required");
		    exit();
		  } 

		  if (empty($lastName)) {
		    header("location: signUp.php?error=Last Name is required");
		    exit();
		  } 

		  if (empty($email)) {
		    header("location: signUp.php?error=Email is required");
		    exit();
		  } 

		  if (empty($userName)) {
		    header("location: signUp.php?error=User Name is required");
		    exit();
		  } 

		  if (empty($userPassword)) {
		    header("location: signUp.php?error=Password is required");
		    exit();
		  } 

		  if (empty($userPasswordRE)) {
		    header("location: signUp.php?error=Please re-enter your password");
		    exit();
		  } else if($userPassword != $userPasswordRE){
		    header("location: signUp.php?error=Password does not match");
		    exit();
		    }
		    
Secondly, the function will then take the username that is inputted into the sign up form and query the database for any matches.
		    
		$sql = "SELECT * FROM user_info WHERE userName='$userName' ";
				$result = mysqli_query($conn, $sql);

If there is any matches, it will then return an error of `username is taken`

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken");
	        exit();
		}
		
If there isn't any matches for the username in the database, it will then create another query to insert the information given by the user into the database
Then let the user know their account has been created successfully.
		
		else {
		   $sql2 = "INSERT INTO user_info(firstName, lastName, email, userName, userPassword)
		    VALUES('$firstName', '$lastName', '$email', '$userName', '$userPassword')";
		   $result2 = mysqli_query($conn, $sql2);
		   if ($result2) {
			 header("Location: signup.php?success=Your account has been created successfully");
			 exit();
		   }else {
	           	header("Location: signup.php?error=unknown error occurred");
		        exit();

# HOW MAIN WORKS:

1. Session
Main relies on the session from login feature to unlock some exclusive functions. If login session is not inititated, the user will be given a link to the login page, otherwise a link to logout from the account and end the session and then go back to main page with the login session unset. 

- Link to login/logout depending on session from login.

	
		<a href="
	            <?php 
	              session_start();
	              if ($_SESSION['sess'] != "SESS"){
	                echo "userLogin.php";
	              } else {
	                echo "userLogout.php";
	              }
	            ?>
	          ">
	            <?php 
         	     if ($_SESSION['sess'] != "SESS"){
  	      	        echo "Login";
        	      } else {
        	        echo "Logout";
        	      }
        	    ?>
          	</a>
	  
- `userLogout.php`
	
	
		<?php
		session_start();
		unset($_SESSION['sess']);
		unset($_SESSION['userName']);
		unset($_SESSION['id']);
		header('Location: main.php');
		?>

2. Item Display
Similar to item display in admin's side, the php will use a loop to take the variables of all the available records in the book table. Then, the variables will be displayed in an orderly fashion. 

		<div class="content">
	        	<h3><?php echo $title ?></h3>
	        	<br />
	        	<div class="details">
	        		<span>Author: <?php echo $author ?></span><br />
	        		<span>Genre: <?php echo $genre ?></span><br />
	        		<span>ISBN: <?php echo $ISBN ?></span><br />
       	        		<span>Price: <?php echo $price ?> NTD</span><br /><br /><br />
       	        		<p><?php echo $description ?></p>
			</div>
			<a href="#" class="btn">Purchase</a>
		</div>

