<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_SESSION['login_user']) || $_SESSION["ROLE"] == "0"){
   
}else{
     header('Location:../index.php');
}

if($_SESSION["ROLE"] == "1"){
   header('Location: admin.php');
}else{


}
 ?>