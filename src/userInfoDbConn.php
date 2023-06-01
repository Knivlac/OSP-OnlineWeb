<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbName="users";

$conn = mysqli_connect($server_name, $user_name, $password, $dbName);

if (!$conn) {
  die("Failed ". mysqli_connect_error());
} else

?>