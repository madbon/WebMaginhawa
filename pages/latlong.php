<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<html>
<head>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBx5PRy8IQOrVKRJCtQDnc9BwOSGpdfwk&sensor=false"></script>
</head>
<body>
    <input id="btn" type="button" value="search for miami coordinates" />
    <input type="text" id="address" placeholder="Enter Complete address">

    <script type="text/javascript">

    $("#btn").click(function(){
    	var address = $("#address").val();
            var geocoder =  new google.maps.Geocoder();
    		geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            alert("location : " + results[0].geometry.location.lat() + " " +results[0].geometry.location.lng()); 
          } else {
            alert("Something got wrong " + status);
          }
        });
});
    </script>
</body>
</html>