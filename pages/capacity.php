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

    <title>Kutsara CP | Sit Capacity</title>
    <!-- Customized CSS for General Interface -->
    <link href="custom/mystyle.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/tabicon.ico" />
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
    img.myimagehistory
    {
        height: 300px;
        width: 300px;

       
    }
    div.mypanel
    {
        background-color: white;
        height: 320px;
        width: 320px;
        text-align: center;
        padding-top: 10px;
        box-shadow: 0.5px 0.5px 1px 1px rgb(100,100,100);
    }
    p.myp-body
    {
        margin-top:50px;
       line-height: 30px;

    }
    textarea.mytextareahistory
    {
        height: 200px;
    }
    div.mypanelfooter1
    {

    }
    #restid
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
            <br/>
           <h2>Exact Location of Restaurant</h2>
                <hr>
            <div class="row">

                <div class="col-lg-12">
                    <center>
                        <br/>
                            <img src="../img/table.png" class="myimagehistory">
                            <h3>Can accomodate <?php
                                    $sess_restid = $_SESSION["REST_ID"];
                                    $sql2 = "SELECT * FROM tbl_rest_registration WHERE REST_ID ='$sess_restid' AND IS_ACTIVE=1 ";
                                    $result2 = $conn->query($sql2);
                                    if ($result2->num_rows > 0) {
                                        while($row2 = $result2->fetch_assoc()) {
                                            echo $row2['CAPACITY_CHAIRS'];
                                            echo '<p id="restid">'.$row2['REST_ID'].'</p>';
                                        }
                                    } 
                                ?> customers</h3>   
                    </center>
                   
                    <div class="row">
                        <br/>
                        <div class="col-lg-8">
                            <form method="post" action="" id="formchairs">
                                <label>How many customers can be accommodated?</label>
                                <input type="number" class="form-control" id="txtcapacity">
                                <br/>
                                <button type="submit" class="btn btn-sm btn-success btn-outline">Update</button>
                            </form>
                        </div>
                    </div>
                    <br/>
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
    <script src="../responsivetools/sbadmin/dist/js/sb-admin-2.js"></script>
    <script src="custom/myfunction.js"></script>
     <!--JS for Confirm-->
    <script src="../responsivetools/jquery-confirm/js/jquery-confirm.js"></script>
    <script async src="../responsivetools/jquery-confirm/js/sync-confirm.js"></script>

    <script type="text/javascript">
        $("#formchairs").submit(function(){
            var txtcapacity = $("#txtcapacity").val();
            var restid = $("#restid").text();
            $.confirm({
                            title: '',
                            content: 'Are you sure you want to update the number of seats?',
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
                                                url:'../phpObjects/toUpdateCapacityChairs.php',
                                                data: {
                                                        restid:restid,
                                                        txtcapacity:txtcapacity
                                                    }
                                                    }).done(function(data){
                                                    
                                                    location.reload();
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
    </script>

</body>

</html>
