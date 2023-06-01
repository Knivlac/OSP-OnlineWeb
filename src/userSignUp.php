<?php
include "userInfoDbConn.php";

if (isset($_POST['firstName']) && isset($_POST['lastName'])
    && isset($_POST['email']) && isset($_POST['userName']) 
    && isset($_POST['userPassword'])
    && isset($_POST['userPasswordRE'])) {
  // collect value of input field
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
  } else{

	    $sql = "SELECT * FROM user_info WHERE userName='$userName' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken");
	        exit();
		}else {
           $sql2 = "INSERT INTO user_info(firstName, lastName, email, userName, userPassword)
            VALUES('$firstName', '$lastName', '$email', '$userName', '$userPassword')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred");
		        exit();
           }
		}
	}
} else{
  header("location: signUp.php?error=Please fill in the required informations");
  exit();
}
?>