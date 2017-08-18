<?php
include('connect.php');

$_editcaption = $_POST['editcaption'];
$editcaption = addslashes($_editcaption);
$captionIdNumbertrim = $_POST['captionIdNumbertrim'];


$sql = "UPDATE tbl_newsfeed_post SET CAPTION='$editcaption' WHERE POST_ID=$captionIdNumbertrim ";

mysqli_query($conn, $sql);


?>