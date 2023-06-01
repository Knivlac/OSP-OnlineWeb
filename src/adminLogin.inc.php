<?php
session_start();
include "DbConn.php"; 

if (isset($_POST['adminID']) && isset($_POST['adminPassword']) && isset($_POST['loginSubmit'])) {



	$adminID = $_POST['adminID'];
	$pass = $_POST['adminPassword'];

	if (empty($adminID)) {
		header("Location: adminLogin.php?error=Enter your ID");
	    exit();
	}else if(empty($pass)){
        header("Location: adminLogin.php?error=Password is required");
	    exit();
	}else{
        
		$sql = "SELECT adminID, adminPassword 
		FROM admin_info 
		WHERE adminID='".$adminID."' AND adminPassword='".$pass."'";

		$result = mysqli_query($conn, $sql);

		$count = mysqli_num_rows($result);

		if ( $count == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['adminID'] === $adminID && $row['adminPassword'] === $pass) {
            	$_SESSION['adminID'] = $row['adminID'];
                $_SESSION['adminName'] = $row['adminName'];
            	header("Location: adminControl.php");
		        exit();
            }else{
				header("Location: adminLogin.php?error=Incorect ID or password");
		        exit();
			}
		}else{
			header("Location: adminLogin.php?error=Incorect ID or password");
	        exit();
		}
	}
	
}else{
	header("Location: adminLogin.php");
	exit();
}