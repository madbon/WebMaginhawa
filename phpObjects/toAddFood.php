<?php
include('connect.php');

$_txtfoodadd 	= $_POST['txtfoodadd'];
$txtfoodadd  	= addslashes($_txtfoodadd);
$sess_restid 	= $_POST['sess_restid'];

$sql = "INSERT INTO tbl_food (FOOD_NAME, REST_ID) VALUES('$txtfoodadd','$sess_restid') ";
mysqli_query($conn, $sql);

?>