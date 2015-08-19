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
              <img src="images/broadway.jpeg" alt="Market"/>
              <div class="carousel-caption">
                <h3>U-District Market</h3>
                <p>Open all year - Saturdays 9am-2pm</p>
              </div>
            </div>
            <div class="item">
              <img src="images/broadway.jpeg" alt="Market"/>
              <div class="carousel-caption">
                <h3>Capitol Hill Market</h3>
                <p>Open all year - Sundays 11am-3pm</p>
              </div>
            </div>
            <div class="item">
              <img src="images/broadway.jpeg" alt="Market"/>
              <div class="carousel-caption">
                <h3>West Seattle Market</h3>
                <p>Open all year - Sundays 10am-2pm</p>
              </div>
            </div>
            <div class="item">
              <img src="images/broadway.jpeg" alt="Market"/>
              <div class="carousel-caption">
                <h3>Columbia City Market</h3>
                <p>Open May-October - Wednesdays 3pm-7pm</p>
              </div>
            </div>
            <div class="item">
              <img src="images/broadway.jpeg" alt="Market"/>
              <div class="carousel-caption">
                <h3>Lake City Market</h3>
                <p>Open June-October - Thursdays 3pm-7pm</p>
              </div>
            </div>
            <div class="item">
              <img src="images/broadway.jpeg" alt="Market"/>
              <div class="carousel-caption">
                <h3>Phinney Market</h3>
                <p>Open May-September - Fridays 3pm-7pm</p>
              </div>
            </div>
            <div class="item">
              <img src="images/broadway.jpeg" alt="Market"/>
              <div class="carousel-caption">
                <h3>Magnolia Market</h3>
                <p>Open June-October - Saturdays 10am-2pm</p>
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

		<div class="col-md-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
				<h3 class="panel-title">Map</h3>
				</div>
				<div class="panel-body">
				<?php include('includes/map.php'); ?>
				<!-- <img class="img-responsive center-block" src="images/image-map2.png" alt="map of seattle"> -->
				</div>
			</div>
		</div> <!-- end of map -->



		<div class="col-md-7">
			<div class="panel panel-primary">
				<div class="panel-heading">
				<h3 class="panel-title">About</h3>
				</div>
				<div class="panel-body">
				<p>Have you ever found yourself searching for when a particular piece of produce is in season at your local market? Have you ever been shopping at your local market and found yourself disappointed because none of the vendors had what you needed? 
				</p>
				<p>We are here to answer questions just like these! We are here to tell you what produce is available at which Seattle Neighborhood Market and when. Keeping track of what produce will be at what market in each season is hard enough – let us help you! 
				</p>
				<p><a href="fresh.php">Here</a> you will find plenty of information regarding what is available this beautiful summer season at each Neighborhood Market! 
				</p>
				<p><a href="about.php">Read More about our Mission</a></p>
				</div>
			</div> 
			
				<div class="row">
		
			<div class="col-sm-6">
				<div class="panel panel-primary">
					<div class="panel-body">
					<div class="cta"><a href="newvendors.php"><img src="images/new-vendor-cta.jpg" alt="new vendors" class="img-responsive center-block"><div class="cta-text"><h3>Become a Vendor</h3></div></a></div>
					</div>
				</div>
			</div>

		<div class="col-sm-6">
			<div class="panel panel-primary">
				<div class="panel-body">
				<div class="cta"><a href="fresh.php"><img src="images/fresh-list-cta.jpg" alt="new vendors" class="img-responsive center-block cta"><div class="cta-text"><h3>See the Fresh List</h3></div></a></div>
				</div>
			</div>
		</div>
		</div>	<!-- end of nested cta row -->
			
			
		</div> <!-- end of about/cta column -->

      </div> <!-- end of main row -->
      


<?php
  get_footer();
?>
