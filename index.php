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
			<p>Have you ever found yourself searching for when a particular piece of produce is in season at your local market? Have you ever been shopping at your local market and found yourself disappointed because none of the vendors had what you needed? 
			</p>
			<p>We are here to answer questions just like these! We are here to tell you what produce is available at which Seattle Neighborhood Market and when. Keeping track of what produce will be at what market in each season is hard enough – let us help you! 
			</p>
			<p><a href="fresh.php">Here</a> you will find plenty of information regarding what is available this beautiful summer season at each Neighborhood Market! 
			</p>
			<p><a href="about.php">Read More about our Mission</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Map</h3>
            </div>
            <div class="panel-body">
         <img class="img-responsive center-block" src="images/image-map2.png" alt="map of seattle">
            </div>
          </div>
        </div>
      </div>
      
	  <div class="row">
	  <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">CTA 1</h3>
        </div>
        <div class="panel-body">
          <p>Possible image and link to another interior page</p><p>rem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque erat diam, quis venenatis ante aliquam quis.</p><p>Etiam tempor dui ut interdum eleifend. Praesent nec metus vitae mauris malesuada elementum pulvinar blandit risus. Pellentesque vel placerat nunc, at auctor lorem.</p>
        </div>
      </div>
	  </div>
	  
	  <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">CTA 2</h3>
        </div>
        <div class="panel-body">
          <p>Possible image and link to another interior page</p><p>rem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque erat diam, quis venenatis ante aliquam quis.</p><p>Etiam tempor dui ut interdum eleifend. Praesent nec metus vitae mauris malesuada elementum pulvinar blandit risus. Pellentesque vel placerat nunc, at auctor lorem.</p>
        </div>
      </div>
	  </div>
	  
	  <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">CTA 3</h3>
        </div>
        <div class="panel-body">
          <p>Maybe this should be an image and link to the Fresh List?</p><p>rem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque erat diam, quis venenatis ante aliquam quis.</p><p>Etiam tempor dui ut interdum eleifend. Praesent nec metus vitae mauris malesuada elementum pulvinar blandit risus. Pellentesque vel placerat nunc, at auctor lorem.</p>
        </div>
      </div>
	  </div>
	  
	  </div>

<?php
  get_footer();
?>