<!DOCTYPE html>
<?php
  include_once ("includes/globals.php");
  get_header();
?>
    <div class="container theme-showcase" role="main">
      <div class="row">
        <div class="col-md-7">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">About</h3>
            </div>
            <div class="panel-body">
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Map</h3>
            </div>
            <div class="panel-body">
              <p><head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <title>Google Maps Multiple Markers</title>
      <script src="http://maps.google.com/maps/api/js?sensor=false"
              type="text/javascript"></script>
    </head>
    <body>
      <div id="map" style="width: 420px; height: 420px;"></div>

      <script type="text/javascript">
        var locations = [
          ['U-District Farmers Market', 47.665736,-122.3130582, 1, ],
          ['Capitol Hill Farmers Market',47.6157703,-122.3211901, 2],
          ['West Seattle Farmers Market', 47.562281, -122.387779, 3],
          ['Columbia City Farmers Market', 47.5655101,-122.2889849, 4],
          ['Lake City Farmers Market', 47.71212,-122.2895871, 5],
          ['Phinney Farmers Market', 47.6776304,-122.3540774, 6],
          ['Magnolia Farmers Market', 47.6393086,-122.3993501, 7],
          
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: new google.maps.LatLng(47.614848, -122.3359058),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
          });

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
      </script>
    </body></p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">What We Do</h3>
        </div>
        <div class="panel-body">
          <p>We do what we do because we are who we are.</p>
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Graphic</h3>
        </div>
        <div class="panel-body">
          <p>Something graphical goes here.</p>
        </div>
      </div>   
<?php
  get_footer();
?>
