<?php

//require '../classes/Upload.php';
require '../core/init.php';
//
//$fileUpload = new File();
//
//if(isset($_FILES['file'])){
//    $fileUpload->uploadFile($_FILES['file']);
//}else{
//    die('File was not submitted');
//}


$user = DB::getInstance()->insert('tbl_newsfeed_post', array(
    'CAPTION' => Input::get('caption')
));
if(!$user->error())
{
    $id = $user->getlastid();

}


$formdata = DB::getInstance();

echo '<pre>';
$img = $_FILES['img'];

if(!empty($img))
{
    $img_desc = reArrayFiles($img); 
    print_r($img_desc);
    
    foreach($img_desc as $val)
    {
        $newname = date('YmdHis',time()).mt_rand().'.jpg';
        
        move_uploaded_file($val['tmp_name'],'../img/'.$newname);
        $stat = $formdata->insert('tbl_images',array('PATH'=>$newname,'POST_ID'=>$id));


        if($stat)
        {
            echo 'success';
        }else
        {
            echo 'error';
        }
        
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