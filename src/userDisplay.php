<?php include 'userControl.php' ?>
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
	<title>User Management</title>
	<script type="text/javascript">
		function cmd_del(username){
			document.getElementById("cmd_del").value = username;
			window.location.href = "userControl.php?cmd=delete&username=" + username;
		}
	</script>
</head>
<body>
	<div class="banner">
      	<a href="../main.html"><img class="logo" src="design/graphic/Sprite-Logo.png"/></a>
    </div>
    <div class="display-list">
	    <h2>Available Users</h2>
	    	<table>
	    		<thead>
		    		<tr>
		    			<th>Username</th>
		    			<th>Password</th>
		    			<th>Action</th>
		    		</tr>
	    		</thead>
    		<tbody>
    			<?php
    			$sql = "SELECT * FROM user";
    			$query = mysqli_query($con,$sql);
    			$row = mysqli_num_rows($query);

    			for ($i=0; $i < $row; $i++) { 
    				$result = mysqli_fetch_array($query);
    				$username = $result['username'];
    				$password = $result['password'];
    			?>
    			<tr>
    				<td><?php echo $username ?></td>
    				<td><?php echo $password ?></td>
    				<td>
						<input type="submit" name="cmd" id="cmd_del" value="delete" onclick="	cmd_del(<?php echo "'$username'"?>)">
					</td>
    			</tr>
    		<?php } ?>
    		</tbody>
    	</table>
    <a class="adminLogin" href="adminControl.php">Back</a>
    </div>
</body>
</html>