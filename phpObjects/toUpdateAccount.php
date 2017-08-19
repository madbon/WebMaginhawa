<?php
include('connect.php');

$_username 	= $_POST['username'];
$username 	= addslashes($_username);

$_password 	= $_POST['password'];
$s_password = addslashes($_password);
$password 	= md5($s_password);

$restid = $_POST['restid'];

$sql = "UPDATE tbl_rest_registration SET USERNAME='$username', PASSWORD='$password' WHERE REST_ID=$restid ";
mysqli_query($conn, $sql);


?>