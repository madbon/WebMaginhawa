<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maginhawa Restaurant Finder admin Panel</title>
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
    <!--  CSS for confirm  -->
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/css/jquery-confirm.css" type="text/css">
    <link rel="stylesheet" href="../responsivetools/jquery-confirm/css/jquery-confirm.less" type="text/css">
    <!-- <link rel="stylesheet" href="../responsivetools/jquery-confirm/demo/libs/bundled.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="../responsivetools/jquery-confirm/demo/demo.css"> -->
    

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
                <a class="navbar-brand" id="mynavbar-brand" href="index.html">Maginhawa Restaurant Finder Admin Panel</a>
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
                        <li><a href="..\index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <img src="../img/admin.png" height="200" width="200">
                                <h3>ADMIN</h3>
                            </div>
                        </li>
                        <!-- Home Level -->
                        <li>
                            <a href="admin.php"><i class="glyphicon glyphicon-stop"></i> Pending</a>
                        </li>
                        <li>
                            <a href="registered.php"><i class="glyphicon glyphicon-ok-sign"></i> Registered</a>
                        </li>
                        <!-- History Level -->
                        <li>
                            <a href="archive.php"><i class="glyphicon glyphicon-trash"></i> Archive</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3>List of Registered Restaurant</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>RESTAURANT</th>
                                <th>OWNER</th>
                                <th>CONTACT #</th>
                                <th>BLOG/WEB ADDRESS</th>
                                <th>LOCATION</th>
                                <th>LATITUDE</th>
                                <th>LONGITUDE</th>
                                <th>USERNAME</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                   
                </div>
                <hr>
            <div class="row">
                <div class="col-lg-8">

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
    <script src="../responsivetools/bootstrap/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../responsivetools/sbadmin/dist/js/sb-admin-2.js"></script>
    <!--JS for Confirm-->
    <script src="../responsivetools/jquery-confirm/js/jquery-confirm.js"></script>
    <script async src="../responsivetools/jquery-confirm/js/sync-confirm.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $.getJSON("../phpObjects/ISACTIVE.json",function(data){
                // var search = $("#search").val();
                // var regex = new RegExp(search, 'i');
                var output;
                $.each(data, function(key, val){
                 
                  output += "<tr>";
                  output += "<td id='"+key+"'>"+val.REST_ID+"</td>";
                  output += "<td id='"+key+"'>"+val.NAME+"</td>";
                  output += "<td id='"+key+"'>"+val.OWNER+"</td>";
                  output += "<td id='"+key+"'>"+val.CONTACT_INFO+"</td>";
                  output += "<td id='"+key+"'>"+val.BLOG_WEB_URL+"</td>";
                  output += "<td id='"+key+"'>"+val.COMP_ADDRESS+"</td>";
                  output += "<td id='"+key+"'>"+val.LAT+"</td>";
                  output += "<td id='"+key+"'>"+val.LONGI+"</td>";
                  output += "<td id='"+key+"'>"+val.USERNAME+"</td>";
                  output += "<td><button type='button' class='btn btn-danger btn-sm btndelete'><span class='glyphicon glyphicon-trash'></span></button></td>";
                  output += "</tr>";
                
                });

                $("tbody").html(output);

                $('.btndelete').on('click', function () { 
                    var id = $(this).parents('tr:eq(0)').find('td:eq(0)').text();
                    var self = this;
                    $.confirm({
                            title: '',
                            content: 'Are you sure you want to archive this?',
                            icon: 'fa fa-question-circle',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            opacity: 0.5,
                            buttons: {
                                'confirm': {
                                    text: 'Archive',
                                    btnClass: 'btn-blue',
                                    action: function () {
                                                    $.ajax({

                                                           type:'POST',
                                                           url:'../phpObjects/toArchiveRestoRegis.php',
                                                           data: {
                                                                id:id
                                                           }

                                                       }).done(function(data){
                                                            $.alert('Restaurant completely moved in archive');
                                                                $.ajax({
                                                                       type:'POST',
                                                                       url:'../phpObjects/toProduceIsActiveJson.php'
                                                                   }).done(function(data){
                                                                        $(self).closest('tr').remove();
                                                                    });

                                                                   $.ajax({
                                                                       type:'POST',
                                                                       url:'../phpObjects/toProduceJsonArchive.php'
                                                                   }).done(function(data){
                                                                        // $(self).closest('tr').remove();
                                                                    });
                                                       });
                                    }
                                },
                                cancel: function () {
                                    $.alert('you clicked on <strong>cancel</strong>');
                                },
                            }
                                    
                        });
                });
            });
            
            

        });
    </script>
</body>

</html>
