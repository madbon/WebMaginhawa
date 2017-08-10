<?php
include('connect.php');

$REST_ID = $_POST['id'];

$sql = "UPDATE tbl_rest_registration SET IS_ACTIVE= 1  WHERE REST_ID='$REST_ID'";
mysqli_query($conn, $sql);

?>