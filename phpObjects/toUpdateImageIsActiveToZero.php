<?php
include('connect.php');

$captionIdNumbertrim = $_POST['captionIdNumbertrim'];


$sql = "UPDATE tbl_images SET IS_ACTIVE='0' WHERE POST_ID=$captionIdNumbertrim ";

mysqli_query($conn, $sql);


?>