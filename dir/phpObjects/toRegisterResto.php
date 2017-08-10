<?php
include('connect.php');

$NAME               = $_POST['name'];
$OWNERNAME          = $_POST['ownername'];
$HISTORY            = $_POST['history'];
$CONTACT_INFO       = $_POST['contactnumber'];
$BLOG_WEB_URL       = $_POST['blogweburl'];
$CAPACITY_CHAIRS    = $_POST['capacityofchairs'];
$COMP_ADDRESS       = $_POST['completeaddress'];
$LAT                = $_POST['latitude'];
$LONGI              = $_POST['longitude'];
$CAPACITY_CHAIRS    = $_POST['capacityofchairs'];
$USERNAME           = $_POST['username'];
$PASSWORD           = md5($_POST['password']);


$sql = "INSERT INTO tbl_rest_registration (NAME,OWNER,HISTORY,CONTACT_INFO,BLOG_WEB_URL,COMP_ADDRESS,LAT,LONGI,CAPACITY_CHAIRS,USERNAME,PASSWORD) VALUES ('$NAME','$OWNERNAME','$HISTORY','$CONTACT_INFO','$BLOG_WEB_URL','$COMP_ADDRESS','$LAT','$LONGI','$CAPACITY_CHAIRS','$USERNAME','$PASSWORD')";

mysqli_query($conn, $sql);


?>