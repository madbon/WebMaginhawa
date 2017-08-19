<?php
include('connect.php');

$foodid = $_POST['foodid'];
$best = $_POST['best'];


$sql = "UPDATE tbl_food SET IS_BEST='$best' WHERE FOOD_ID=$foodid ";
mysqli_query($conn, $sql);


?>