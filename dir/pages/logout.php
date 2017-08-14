<?php 
session_start();
unset($_SESSION['login_user']);
unset($_SESSION["ROLE"]);
unset($_SESSION["REST_ID"]);
header('Location: ../index.php');
 ?>