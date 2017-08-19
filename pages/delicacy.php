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

    <title>Kutsara CP | Food</title>
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    
    div.mymodalheader1
    {
        background-color: rgb(24,188,156);
        color: white;
    }
    button.mybuttonlegend
    {
        border:0;
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
                    <h3>Add Food</h3>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <textarea class="form-control"></textarea>
                        </div>
                        <button type="button" class="btn btn-outline btn-success btn-sm">Save</button>
                    </div>
                </div>
                <hr>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Whole body of post -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Delicacies &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-outline btn-warning btn-sm mybuttonlegend">
                                <i class="glyphicon glyphicon-heart-empty"> </i>
                            </button> Mark as best seller &nbsp;&nbsp;
                            <button type="button" class="btn btn-outline btn-info btn-sm mybuttonlegend">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </button> Edit food name &nbsp;&nbsp;
                            <button type="button" class="btn btn-outline btn-danger btn-sm mybuttonlegend">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button> Delete Food &nbsp;&nbsp;
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Food Name</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Adobo</td>
                                            <td>
                                                <button type="button" class="btn btn-outline btn-warning btn-sm"><i class="glyphicon glyphicon-heart-empty"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Caldereta</td>
                                             <td>
                                              <button type="button" class="btn btn-outline btn-warning btn-sm"><i class="glyphicon glyphicon-heart-empty"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Kare-Kare</td>
                                             <td>
                                                <button type="button" class="btn btn-outline btn-warning btn-sm"><i class="glyphicon glyphicon-heart-empty"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
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
    <!-- Custom Theme JavaScript -->
    <script src="../responsivetools/sbadmin/dist/js/sb-admin-2.js"></script>
    <!--JS for Confirm-->
    <script src="../responsivetools/jquery-confirm/js/jquery-confirm.js"></script>
    <script async src="../responsivetools/jquery-confirm/js/sync-confirm.js"></script>
    <script src="custom/myfunction.js"></script>


</body>

</html>
