<?php 
include('connect.php');
$checkdata = "SELECT * from tbl_rest_registration WHERE IS_ACTIVE=2";
$result = mysqli_query($conn, $checkdata);
    if ($result->num_rows > 0) {
        $emparray = array();

        while($row = $result->fetch_assoc()) { 
          $emparray[] = $row;
        }

        $json_string = json_encode($emparray);
        $file = 'ISACTIVE.json';
        file_put_contents($file, $json_string);
    }
    else
    {
        echo "No result found";
    }

 ?>