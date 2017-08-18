<?php
include('../Session/session_user.php');
require '../phpObjects/connect.php';

// $caption = $_POST['editcaption'];
$sess_restid = $_SESSION["REST_ID"];

$img = $_FILES['editimg'];
$captionIdNumber = $_POST['captionIdNumber'];
if(!empty($img))
{
    $img_desc = reArrayFiles($img); 
    // print_r($img_desc);
    $arr = array();
    
    foreach($img_desc as $val)
    {
        $newname = date('YmdHis',time()).mt_rand().'.jpg';
        
        move_uploaded_file($val['tmp_name'],'img/'.$newname);
        $sql2 = "INSERT INTO tbl_images (POST_ID,REST_ID, PATH) VALUES('$captionIdNumber','$sess_restid','$newname')";
        mysqli_query($conn, $sql2);
    }

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
?>

<!--
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/phpObjects/connect.php">
    </head>
    
</html>-->
