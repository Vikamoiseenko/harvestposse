<!DOCTYPE html>
<?php
  include_once ("includes/globals.php");
  get_header();
?>
    <div class="container" role="main">
      <div class="jumbotron">
        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <img src="market.jpg" alt="Market"/>
              <div class="carousel-caption">
                <h2>U-District Market</h2>
                <p>The U-District is the perfect market to browse for hours - there are plenty of produce vendors present. Grab some lunch and a drink fit for the season and explore!</p>
              </div>
            </div>
            <div class="item">
              <img src="market.jpg" alt="Market"/>
              <div class="carousel-caption">
                <h2>Capitol Hill Market</h2>
                <p>It’s a smaller neighborhood market, but definitely isn’t one to be overlooked! Great vendors offer wine, beer, cider, and fresh pastries.</p>
              </div>
            </div>
            <div class="item">
              <img src="market.jpg" alt="Market"/>
              <div class="carousel-caption">
                <h2>West Seattle Market</h2>
                <p>It's a market. Eat up.</p>
              </div>
            </div>
            <div class="item">
              <img src="market.jpg" alt="Market"/>
              <div class="carousel-caption">
                <h2>Columbia City Market</h2>
                <p>The Columbia City market is mainly produce, but also has vendors offering a great selection in wines.</p>
              </div>
            </div>
            <div class="item">
              <img src="market.jpg" alt="Market"/>
              <div class="carousel-caption">
                <h2>Lake City Market</h2>
                <p>Lake City is a smaller market, but once you’ve tried some of the yummy food available, it will quickly become your favourite! </p>
              </div>
            </div>
            <div class="item">
              <img src="market.jpg" alt="Market"/>
              <div class="carousel-caption">
                <h2>Phinney Market</h2>
                <p>May through September this smaller neighborhood market offers lovely farm fresh produce and a great selection of meat, poultry and seafood. </p>
              </div>
            </div>
            <div class="item">
              <img src="market.jpg" alt="Market"/>
              <div class="carousel-caption">
                <h2>Magnolia Market</h2>
                <p>It's a market. Eat up.</p>
              </div>
            </div>
          </div>

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
          </ol>
          <!-- Carousel controls -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    
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
          <p>Have you ever found yourself searching for when a particular piece of produce is in season at your local market? Have you ever been shopping at your local market and found yourself disappointed because none of the vendors had what you needed? 
</p>
<p>We are here to answer questions just like these! We are here to tell you what produce is available at which Seattle Neighborhood Market and when. Keeping track of what produce will be at what market in each season is hard enough – let us help you! 
</p>
<p><a href="#">Here</a> you will find plenty of information regarding what is available this beautiful summer season at each Neighborhood Market! 
</p>
<p><a href="#">Read More about our Mission</a></p>
        </div>
      </div>

<?php
  get_footer();
?>