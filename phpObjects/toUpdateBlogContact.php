<?php
include('../pages/Session/session_user.php');
require 'connect.php';

$_blogweb = $_POST['blogweb'];
$blogweb = addslashes($_blogweb);
$_contact = $_POST['contact'];
$contact = addslashes($_contact);

$sess_restid = $_SESSION["REST_ID"];

$sql = "UPDATE tbl_rest_registration SET CONTACT_INFO='$contact', BLOG_WEB_URL='$blogweb' WHERE REST_ID=$sess_restid ";
mysqli_query($conn, $sql);


?>




