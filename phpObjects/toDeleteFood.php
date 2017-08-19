<?php
include('connect.php');

$foodid = $_POST['foodid'];


$sql = "UPDATE tbl_food SET IS_ACTIVE='0' WHERE FOOD_ID=$foodid ";
mysqli_query($conn, $sql);


?>