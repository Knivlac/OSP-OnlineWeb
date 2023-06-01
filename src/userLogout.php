<?php
session_start();
unset($_SESSION['sess']);;
header('Location: main.php');
?>