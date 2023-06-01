<?php
session_start();
include "DbConn.php"; 

if (isset($_POST['userName']) && isset($_POST['userPassword']) && isset($_POST['loginSubmit'])) {



	$userName = $_POST['userName'];
	$pass = $_POST['userPassword'];

	if (empty($userName)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
        
		$sql = "SELECT userName, userPassword 
		FROM user_info 
		WHERE userName='".$userName."' AND userPassword='".$pass."'";

		$result = mysqli_query($conn, $sql);

		$count = mysqli_num_rows($result);

		if ( $count == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['userName'] === $userName && $row['userPassword'] === $pass) {
            	$_SESSION['userName'] = $row['userName'];
            	$_SESSION['id'] = $row['id']; 
            	header("Location: main.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect  name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}