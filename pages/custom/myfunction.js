        $(document).ready(function(){
            $(".hoverbutton").click(function(){
                window.location.href = "userprofile.php";
            });

            $(".profilepic").mouseover(function(){
                $(".hover-profile-pic").show();

            });
            $(".hover-profile-pic").mouseout(function(){
                $(".hover-profile-pic").hide();

            });
            $(".hoverbutton").mouseout(function(){
                $(".hover-profile-pic").show();
                $(this).show();
            });
             $(".hoverbutton").mouseover(function(){
                $(".hover-profile-pic").show();
            });
        });
            