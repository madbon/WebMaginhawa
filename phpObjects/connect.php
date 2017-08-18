<?php
/*------------ connection for online hosting*/
// error_reporting(E_ALL ^ E_NOTICE);
// $servername = "mysql5006.smarterasp.net";
// $username = "a28bc6_stiapp";
// $password = "stiappdb2017";
// $dbname = "db_a28bc6_stiapp";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     //alert("Connection failed: " . $conn->connect_error);
// } 

/*------------ connection for localhost*/
error_reporting(E_ALL ^ E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stiapi_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    //alert("Connection failed: " . $conn->connect_error);
}
?>


