<?php 
include('Session/session_user.php');
include('../phpObjects/connect.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maginhawa Restaurant Finder Portal</title>
    <!--  CSS for confirm  -->
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/css/jquery-confirm.css" type="text/css">
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/css/jquery-confirm.less" type="text/css">
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/demo/libs/bundled.css" type="text/css">
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/demo/demo.css">
    <!-- Bootstrap Core CSS -->
    <link href="../responsivetools/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../responsivetools/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../responsivetools/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../responsivetools/sbadmin/vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../responsivetools/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
   

<style>
        img.postedimage
        {
            height: 200px;
            width: 200px;
            border:0.5px solid rgba(100,100,100,0.5);
            padding:5px;
            margin:5px;
            margin-left:0px;
        }
        div.mypanel-footer
        {
            background-color: white;
        }
        div.panel-body
        {

        }
        div.row, #page-wrapper
        {
             background-color: whitesmoke;
        }
        div#wrapper, #side-menu
        {
            background-color: white;
        }
        nav#mynavbar-top
        {
            background-color: rgb(44,62,80);
        }
        a#mynavbar-brand
        {
            color:white;
        }
        div.mymodalheader1
        {
            background-color: rgb(24,188,156);
            color: white;
        }
        div.row, #page-wrapper
        {
            background-color: transparent;
        }
        .loader {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3498db;
          width: 50px;
          height: 50px;
          -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }  
        .captionimage
        {
            margin-left: 15px;
            margin-top: 10px;
        }
        div.loader
        {
            display: none;
        }
    </style>

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" id="mynavbar-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="mynavbar-brand" href="index.php">Maginhawa Restaurant Finder Portal</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="userprofile.html"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="accountsettings.html"><i class="fa fa-gear fa-fw"></i>Account Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <img src="../img/cautionhot.jpg" height="200" width="200">
                                <h3>CAUTION HOT</h3>
                            </div>
                        </li>
                        <!-- Home Level -->
                        <li>
                            <a href="home.php"><i class="glyphicon glyphicon-home"></i> Home</a>
                        </li>
                        <!-- History Level -->
                        <li>
                            <a href="history.html"><i class="glyphicon glyphicon-info-sign"></i> History</a>
                        </li>
                        <!-- Food level -->
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-cutlery"></i> Food<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="delicacy.html">List of Delicacies</a>
                                </li>
                                <li>
                                    <a href="bestseller.html">Best Seller</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Location Level -->
                        <li>
                            <a href="location.html"><i class="glyphicon glyphicon-map-marker"></i> Location</a>
                        </li>
                        <!-- Capacity Level -->
                        <li>
                            <a href="capacity.html"><i class="glyphicon glyphicon-glass"></i> Capacity</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3>What's new?</h3>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-8">
                        <form action="../pages/form_process.php" method="post" multipart="" enctype="multipart/form-data">
                            <div class="form-group">
                                <textarea class="form-control" name="caption" id="caption"></textarea>
                            </div>
<!--                            <button type="button" class="btn btn-outline btn-info btn-sm">Add Image</button>-->
                            <input type="file" name="img[]" class="form-control" multiple id="images" required>
                           <!--  &nbsp;&nbsp;&nbsp;&nbsp; -->
                           <br/>
                            <button type="submit" class="btn btn-outline btn-success btn-sm" id="postit">Post It</button>
                        </form>

                        <p class="hanep"></p>
                        <div class="loader"></div>
                    </div>
                </div>
                <hr>
            <div class="row">
                <div class="col-lg-8">
                    
                            <div class="outputhere">  
                                
                            </div><!-- /outputhere -->
                    

                                          <?php 
                                          
                                            $sess_restid = $_SESSION["REST_ID"];
                                            $sql = "SELECT * FROM tbl_newsfeed_post WHERE REST_ID = '$sess_restid' ORDER BY POST_ID DESC ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                   echo '<div class="panel panel-default">
                                                            <ul class="nav navbar-top-links navbar-right">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                                        <i class="fa fa-caret-down"></i>
                                                                    </a>
                                                                <ul class="dropdown-menu dropdown-user">
                                                                    <li  data-toggle="modal" data-target="#myModal">
                                                                        <a href="#">
                                                                            <i class="glyphicon glyphicon-pencil"></i>  Edit Post
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="glyphicon glyphicon-trash"></i> Delete Post
                                                                        </a>
                                                                    </li>
                                                                    </ul>                                                                
                                                                </li> 
                                                            </ul>';
                                                    echo '<p class="captionimage">'.$row['CAPTION'].'</p>';
                                                    echo '<div class="panel-body">'; 

                                                    $rowpostid = $row['POST_ID'];
                                                    $sql2 = "SELECT * FROM tbl_images WHERE POST_ID ='$rowpostid' ";
                                                    $result2 = $conn->query($sql2);
                                                    if ($result2->num_rows > 0) {
                                                        while($row2 = $result2->fetch_assoc()) {
                                                            echo '<img src="'.'../img/'.$row2['PATH'].'" class="postedimage" />'; 
                                                        }
                                                    } 
                                                    echo '</div></div>';
                                                }
                                            } 
                                         ?>    
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="container">
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header mymodalheader1">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Post</h4>
            </div>
            <div class="modal-body">
              <textarea class="form-control"></textarea>
              <br/>
              <button type="button" class="btn btn-outline btn-info btn-sm">Change Photo</button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline btn-success" data-dismiss="modal">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="../responsivetools/sbadmin/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/raphael/raphael.min.js"></script>
    <script src="../responsivetools/sbadmin/vendor/morrisjs/morris.min.js"></script>
    <script src="../responsivetools/sbadmin/data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../responsivetools/sbadmin/dist/js/sb-admin-2.js"></script>
    <!--JS for Confirm-->
    <script src="../responsivetools/jquery-confirm/js/jquery-confirm.js"></script>
    <script src="../responsivetools/jquery-confirm/demo/demo.js"></script>
    <script async src="../responsivetools/jquery-confirm/js/sync-confirm.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
         $(".loader").hide();

           $('form').submit(function(){
          
               var formdata = new FormData(this);
               
                $.confirm({
                            title: '',
                            content: 'Are you sure you want to post this?',
                            icon: 'fa fa-question-circle',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            opacity: 0.5,
                            buttons: {
                                'confirm': {
                                    text: 'Proceed',
                                    btnClass: 'btn-blue',
                                    action: function () {
                                        $(".loader").show();
                                         // $("#captionimage").text($("#caption").val());
                                        var caption = $("#caption").val();

                                          $.ajax({
                                                   type:'POST',
                                                   url:'../pages/form_process.php',
                                                   data: formdata,
                                                   cache:false,
                                                   contentType:false,
                                                   processData:false
                                                   
                                               }).done(function(data){
                                                    $(".loader").hide();
                                                    var output="";
                                                    var content = JSON.parse(data);
                                                    $.each(content, function(key, keme){
                                                        output += '<img src="'+'../img/'+keme.imagename+'" class="postedimage" />';
                                                    });

                                                    $(".outputhere").prepend('<div class="panel panel-default">'+
                                                                '<ul class="nav navbar-top-links navbar-right">'+
                                                                '<li class="dropdown">'+
                                                                '<a class="dropdown-toggle" data-toggle="dropdown" href="#">'+
                                                                '<i class="fa fa-caret-down"></i>'+
                                                                '</a>'+
                                                                '<ul class="dropdown-menu dropdown-user">'+
                                                                '<li  data-toggle="modal" data-target="#myModal"><a href="#"><i class="glyphicon glyphicon-pencil"></i>  Edit Post</a>'+
                                                                '</li>'+
                                                                '<li><a href="#"><i class="glyphicon glyphicon-trash"></i> Delete Post</a>'+
                                                                '</li>'+
                                                                '</ul>'+                                                                 
                                                                '</li>'+  
                                                                '</ul>'+
                                                                '<p class="captionimage">'+caption+'</p>'+
                                                                '<div class="panel-body">'+output+'</div></div>'  
                                                    );



                                               });
                                    }
                                },
                                cancel: function () {
                                    $.alert('you clicked on <strong>cancel</strong>');
                                },
                            }
                                    
                        });
               return false;
           });
               

        });
    </script>
</body>

</html>
