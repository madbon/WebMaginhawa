<?php 
include('../phpObjects/connect.php');
$arr = array();
$checkdata = "SELECT * from tbl_rest_registration WHERE IS_ACTIVE=1";
$result = mysqli_query($conn, $checkdata);
    if ($result->num_rows > 0) {
        $emparray = array();

        while($row = $result->fetch_assoc()) { 
          // $emparray[] = $row;
          $keys = array(
                    'resto_id' => $row['REST_ID'],
                    'resto_name' => $row['NAME'],
                    'resto_owner' => $row['OWNER'],
                    'resto_history' => $row['HISTORY'],
                    'resto_icon' => $row['ICON'],
                    'resto_delicacy' => $row['DELICACY'],
                    'resto_bestseller' => $row['BEST_SELLER'],
                    'resto_contact' => $row['CONTACT_INFO'],
                    'resto_blog' => $row['BLOG_WEB_URL'],
                    'resto_address' => $row['COMP_ADDRESS'],
                    'resto_lat' => $row['LAT'],
                    'resto_long' => $row['LONGI'],
                    'resto_seats' => $row['CAPACITY_CHAIRS'],

            );
            array_push($arr, $keys);
        }


        echo json_encode($arr);
    }
    else
    {
        echo "No result found";
    }

 ?>
