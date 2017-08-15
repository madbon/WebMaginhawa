<?php  
require_once 'connect.php';
// query for json
// $checkdata=" SELECT tbl_newsfeed_post.POSTID, tbl_images.IMG_ID, tbl_newsfeed_post.CAPTION, tbl_images.PATH 
//              FROM tbl_newsfeed_post
//              INNER JOIN tbl_images ON tbl_newsfeed_post.IMG_ID=tbl_images.IMG_ID";

$checkdata = "SELECT * from tbl_rest_registration WHERE IS_ACTIVE=2";

$result = mysqli_query($conn, $checkdata);
    
    if ($result->num_rows > 0) {
        $emparray = array();
        
        
        while($row = $result->fetch_assoc()) { 
        
            // $emparray = (
            //     'IMAGEID' => $row['IMG_ID']
            // );
        
          $emparray[] = $row;

          
          
        }
         echo json_encode($emparray, JSON_PRETTY_PRINT);
          $json_string = json_encode($emparray);

        $file = 'ARCHIVE.json';
        file_put_contents($file, $json_string);
    }
    else
    {
        echo "No result found";
    }