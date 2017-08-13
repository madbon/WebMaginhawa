<?php
require '../phpObjects/connect.php';
$caption = $_POST['caption'];

$sql = "INSERT INTO tbl_newsfeed_post (CAPTION) VALUES('$caption')";
mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);

$img = $_FILES['img'];

if(!empty($img))
{
    $img_desc = reArrayFiles($img); 
    // print_r($img_desc);
    $arr = array();
    
    foreach($img_desc as $val)
    {
        $newname = date('YmdHis',time()).mt_rand().'.jpg';
        
        move_uploaded_file($val['tmp_name'],'../img/'.$newname);
        $sql2 = "INSERT INTO tbl_images (POST_ID, PATH) VALUES('$last_id','$newname')";
        mysqli_query($conn, $sql2);
        
        $keys = array(
                'imagename'     => $newname,
                'imagecaption'  => $caption
            );
         array_push($arr, $keys);
    }
   echo json_encode($arr);
    
    
}

function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}