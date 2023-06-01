<?php
session_start();
unset($_SESSION['sess']);
unset($_SESSION['userName']);
unset($_SESSION['id']);
header('Location: main.php');
?>
