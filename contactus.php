<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();
?>

<?php include 'header.php'; ?>  

<html>
  <head>
    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
  </head>
  <body>
    <!--The div element for the map -->
    <div class="container">
    <div id="map"></div>
    </div>
    <script>
		function initMap() {
  			var location = {lat: 19.048201, lng: 72.911126};
  			var map = new google.maps.Map(
      			document.getElementById("map"), {zoom: 18, center: location});
  			var marker = new google.maps.Marker({position: location, map: map});
		}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA9seNizSKWypyAgUZSLHt80VqcmoB1Ps&callback=initMap">
    </script>
  </body>
</html>

<?php include 'footer.php'; ?> 