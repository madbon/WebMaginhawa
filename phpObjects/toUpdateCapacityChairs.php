<?php
include('connect.php');

$txtcapacity = $_POST['txtcapacity'];
$restid 	 = $_POST['restid'];


$sql = "UPDATE tbl_rest_registration SET CAPACITY_CHAIRS='$txtcapacity' WHERE REST_ID=$restid ";
mysqli_query($conn, $sql);


?>