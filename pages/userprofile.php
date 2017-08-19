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

    <title>Kutsara CP | User Profile</title>
    <!-- Customized CSS for General Interface -->
    <link href="custom/mystyle.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/tabicon.ico" />
    <!--  CSS for confirm  -->
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/css/jquery-confirm.css" type="text/css">
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/css/jquery-confirm.less" type="text/css">
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/demo/libs/bundled.css" type="text/css">
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/demo/demo.css" type="text/css">
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
        border:0.5px solid lightblue;
        padding:5px;
        margin:5px;
        margin-left:0px;
    }
    h3#blogh3, h3#contacth3
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
                <a class="navbar-brand" id="mynavbar-brand" href="#">Kutsara Control Panel</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="accountsettings.php"><i class="fa fa-gear fa-fw"></i>Account Settings</a>
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
                                <?php
                                    $sess_restid = $_SESSION["REST_ID"];
                                    $sql2 = "SELECT * FROM tbl_rest_registration WHERE REST_ID ='$sess_restid' AND IS_ACTIVE=1 ";
                                    $result2 = $conn->query($sql2);
                                    if ($result2->num_rows > 0) {
                                        while($row2 = $result2->fetch_assoc()) {
                                            echo '<img src="'.'img/'.$row2['ICON'].'" class="profilepic" width="200" height="200"/>'; 
                                            echo '<h3 id="restorowname">'.$row2['NAME'].'</h3>';
                                            echo '<h3 id="blogh3">'.$row2['CONTACT_INFO'].'</h3>';
                                            echo '<h3 id="contacth3">'.$row2['BLOG_WEB_URL'].'</h3>';
                                        }
                                    } 
                                ?>
                                <div class="hover-profile-pic">
                                    <div class="btn btn-sm btn-info hoverbutton">Change Profile</div>
                                </div>
                            </div>
                        </li>
                        <!-- Home Level -->
                        <li>
                            <a href="home.php"><i class="glyphicon glyphicon-home"></i> Home</a>
                        </li>
                        <!-- History Level -->
                        <li>
                            <a href="history.php"><i class="glyphicon glyphicon-info-sign"></i> History</a>
                        </li>
                        <!-- Food level -->
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-cutlery"></i> Food<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="delicacy.php">List of Delicacies</a>
                                </li>
                                <li>
                                    <a href="bestseller.php">Best Seller</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Location Level -->
                        <li>
                            <a href="location.php"><i class="glyphicon glyphicon-map-marker"></i> Location</a>
                        </li>
                        <!-- Capacity Level -->
                        <li>
                            <a href="capacity.php"><i class="glyphicon glyphicon-glass"></i> Capacity</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Restaurant Profile</h3>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <h4>Change Profile Picture</h4>
                        <form action="form_process_updateprofilepic.php" method="post"  id="updatepropic" enctype="multipart/form-data">
                            <input type="file" name="img[]" class="form-control"  id="editimages" required>
                            <br/>
                            <button type="submit" class="btn btn-outline btn-success btn-sm" id="editpostit">
                                Update
                            </button>
                        </form>
                        <br/><br/>
                        <h4>Change Restaurant Name</h4>
                        <form action="" method="post" id="formchangename">
                            <div class="form-group">
                                <input class="form-control" id="restname" name="restoname" placeholder="Restaurant Name" required>
                            </div>
                            <button type="submit" class="btn btn-outline btn-success btn-sm" id="btnUpdateRestoName">   Update
                            </button>
                       </form>
                        <br/> <br/> <br/> <br/>
                        
                        <form action="" method="post" id="formblogcontact">
                            <h4>Blog/Web URL</h4>
                            <div class="form-group">
                                <input class="form-control" id="blogweb" required>
                            <h4>Contact Number</h4>
                            <div class="form-group">
                                <input class="form-control" id="contact" required>
                            </div>
                            <button type="submit" class="btn btn-outline btn-success btn-sm">Save</button>
                        </form>
                    </div>
            </div>
                <hr>
           
        </div>
    </div>
    </div>

    <!-- jQuery -->
    <script src="../responsivetools/sbadmin/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../responsivetools/sbadmin/dist/js/sb-admin-2.js"></script>
     <!--JS for Confirm-->
    <script src="../responsivetools/jquery-confirm/js/jquery-confirm.js"></script>
    <script async src="../responsivetools/jquery-confirm/js/sync-confirm.js"></script>
    <script src="custom/myfunction.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $("#blogweb").val($("#blogh3").text());
        $("#contact").val($("#contacth3").text());
        $("#formchangename").submit(function(){
            var restname = $("#restname").val();
            $.confirm({
                            title: '',
                            content: 'Are you sure you want change the name?',
                            icon: 'fa fa-question-circle',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            opacity: 0.5,
                            buttons: {
                                'confirm': {
                                    text: 'Proceed',
                                    btnClass: 'btn-blue',
                                    action: function () {
                                                    $.ajax({
                                                        type:'POST',
                                                        url:'../phpObjects/toUpdateRestoName.php',
                                                        data: {
                                                        restname:restname
                                                        }
                                                        }).done(function(data){
                                                            $.alert('Successfully Saved');
                                                            $("#restorowname").text(restname);
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

        $("#formblogcontact").submit(function(){
            var blogweb = $("#blogweb").val();
            var contact = $("#contact").val();
            $.confirm({
                            title: '',
                            content: 'Are you sure you want save these?',
                            icon: 'fa fa-question-circle',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            opacity: 0.5,
                            buttons: {
                                'confirm': {
                                    text: 'Proceed',
                                    btnClass: 'btn-blue',
                                    action: function () {
                                                    $.ajax({
                                                        type:'POST',
                                                        url:'../phpObjects/toUpdateBlogContact.php',
                                                        data: {
                                                        blogweb:blogweb,
                                                        contact:contact
                                                        }
                                                        }).done(function(data){
                                                            $.alert('Successfully Saved');
                                                           
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
