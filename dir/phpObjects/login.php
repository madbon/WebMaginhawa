<?php 
  include("connect.php"); 
           
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = $_POST['username'];
      $mypassword = md5($_POST['password']); 
      $sql        = "SELECT * FROM tbl_rest_registration WHERE (USERNAME = '$myusername' and PASSWORD = '$mypassword') and IS_ACTIVE = 1 ";
      $result     = mysqli_query($conn,$sql);
      $row        = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $EmployeeID = $row['EmployeeID'];

      $count      = mysqli_num_rows($result);
      if($count == 1) 
      {
          $_SESSION['login_user'] = "1";
          $_SESSION["REST_ID"]  = $row["REST_ID"];
          $admin = $row['USERNAME'];
          if ($admin == 'admin')
          {
             echo "
            <script type='text/javascript'>
              $(document).ready(function(){
                        $.alert({
                            title: '',
                            content: '<center>Successfully login',
                            icon: 'glyphicon glyphicon-ok-circle',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            buttons: {
                                okay: {
                                    text: 'Okay',
                                    btnClass: 'btn-blue',
                                    action: function(){
                                      window.location.href = 'pages/admin.php';
                                    }
                                }

                            }

                        });
          
              });
            </script>
          ";
          }
          else
          {
             echo "
            <script type='text/javascript'>
              $(document).ready(function(){
                        $.alert({
                            title: '',
                            content: '<center>Successfully login',
                            icon: 'glyphicon glyphicon-ok-circle',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            buttons: {
                                okay: {
                                    text: 'Okay',
                                    btnClass: 'btn-blue',
                                    action: function(){
                                      window.location.href = 'pages/home.php';
                                    }
                                }

                            }

                        });
          
              });
            </script>
          ";
          }

         
 
      }else {
         echo "
            <script type='text/javascript'>
              $(document).ready(function(){
                        $.alert({
                            title: 'Failed',
                            content: '<center>Invalid Username or Password',
                            icon: 'glyphicon glyphicon-exclamation-sign',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            buttons: {
                                okay: {
                                    text: 'Okay',
                                    btnClass: 'btn-blue',
                                    action: function(){
                                      
                                    }
                                }

                            }

                        });
          
              });
            </script>
          ";
      }
   }
?>