<?php
include('../pages/Session/session_user.php');
require 'connect.php';
$_textareahistory = $_POST['textareahistory'];
$textareahistory = addslashes($_textareahistory);
$sess_restid = $_SESSION["REST_ID"];

$sql = "UPDATE tbl_rest_registration SET HISTORY='$textareahistory' WHERE REST_ID=$sess_restid ";
mysqli_query($conn, $sql);


?>




