<?php
include('connect.php');


$deletepostid = $_POST['deletepostid'];

$sql = "UPDATE tbl_images SET IS_ACTIVE='0' WHERE POST_ID=$deletepostid ";
mysqli_query($conn, $sql);

$sql2 = "UPDATE tbl_newsfeed_post SET IS_ACTIVE='0' WHERE POST_ID=$deletepostid ";
mysqli_query($conn, $sql2);

?>