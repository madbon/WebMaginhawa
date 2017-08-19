<?php
include('Session/session_user.php');
require '../phpObjects/connect.php';
$restname = $_POST['restname'];
$sess_restid = $_SESSION["REST_ID"];

$sql = "UPDATE tbl_rest_registration SET NAME='$restname' WHERE POST_ID=$sess_restid ";
mysqli_query($conn, $sql);

echo $sess_restid;

?>




