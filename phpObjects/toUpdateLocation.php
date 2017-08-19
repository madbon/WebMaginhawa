<?php
include('connect.php');

$_txtcompaddress = $_POST['txtcompaddress'];
$txtcompaddress = addslashes($_txtcompaddress);

$_txtlong = $_POST['txtlong'];
$txtlong = addslashes($_txtlong);

$_txtlat = $_POST['txtlat'];
$txtlat = addslashes($_txtlat);

$restid = $_POST['restid'];

$sql = "UPDATE tbl_rest_registration SET COMP_ADDRESS='$txtcompaddress', LAT='$txtlat', LONGI = '$txtlong' WHERE REST_ID=$restid ";
mysqli_query($conn, $sql);


?>