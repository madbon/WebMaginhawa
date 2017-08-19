<?php
include('../pages/Session/session_user.php');
require 'connect.php';
$_RestoName = $_POST['restname'];
$RestoName = addslashes($_RestoName);
$sess_restid = $_SESSION["REST_ID"];

$sql = "UPDATE tbl_rest_registration SET NAME='$RestoName' WHERE REST_ID=$sess_restid ";
mysqli_query($conn, $sql);


?>




