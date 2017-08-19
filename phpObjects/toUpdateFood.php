<?php
include('connect.php');

$foodid = $_POST['foodid'];
$_txtupdatefood = $_POST['txtupdatefood'];
$txtupdatefood = addslashes($_txtupdatefood);


$sql = "UPDATE tbl_food SET FOOD_NAME='$txtupdatefood' WHERE FOOD_ID=$foodid ";
mysqli_query($conn, $sql);


?>