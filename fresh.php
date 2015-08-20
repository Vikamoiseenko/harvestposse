<!DOCTYPE html>
<?php
  include_once ("includes/globals.php");  
  get_header();
?>

<div class="container theme-showcase" role="main">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Fresh List</h3>
        </div>
	<div class="panel-body">	
<div class="col-md-10 col-md-offset-1">
  <!-- Nav tabs -->
  <div class="tabcordion tabs-left tabbable">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#summer" aria-controls="summer" role="tab" data-toggle="tab"><img src="images/summerfreshlist.png"></a></li>
    <li role="presentation"><a href="#fall" aria-controls="fall" role="tab" data-toggle="tab"><img src="images/fallfreshlist.png"></a></li>
    <li role="presentation"><a href="#winter" aria-controls="winter" role="tab" data-toggle="tab"><img src="images/winterfreshlist.png"></a></li>
    <li role="presentation"><a href="#spring" aria-controls="spring" role="tab" data-toggle="tab"><img src="images/springfreshlist.png"></a></li>
      </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="summer">
	<div class="col-md-2">
	<h3>Summer</h3>
      <p><li>Bell Peppers</li>
      	<li>Blackberries</li>
        <li>Blueberries</li>
        <li>Cantaloupe</li>
        <li>Corn</li>
        <li>Cucumbers</li>
        <li>Eggplant</li>
        <li>Figs</li>
        <li>Grapes</li>
        <li>Green Beans</li>
        <li>Honeydew</li>
        <li>Hot Peppers</li>
        <li>Peaches</li>
        <li>Pears</li>
        <li>Tomatoes</li>
        <li>Zucchini</li>
        <li>Watermelon</li>
        <li>Sweet Potatoes</li></p>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-8"><h4>Fresh List Twitter</h4>
		            <a class="twitter-timeline"  href="https://twitter.com/harvest_posse" data-widget-id="634484631673311232">Tweets by @harvest_posse</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
          </div>
		
		
		
		</div>
    <div role="tabpanel" class="tab-pane fade" id="fall"><h3>Fall</h3>
    <img src="images/image3-sml.png" alt="lettuce" align="right">
      <p><li>Apples</li>
      <li>Beets</li>
      <li>Broccoli</li>
      <li>Brussels Sprouts</li>
      <li>Cabbage</li>
      <li>Carrots</li>
      <li>Cauliflower</li>
      <li>Celery</li>
      <li>Collard Greens</li>
      <li>Pumpkin</li>
      <li>Rutabagas</li>
      <li>Sweet Potatoes</li></p></div>
    <div role="tabpanel" class="tab-pane fade" id="winter"><h3>Winter</h3>
    <img src="images/image4-sml.png" alt="lettuce" align="right">
      <p><li>Apples</li>
      <li>Beets</li>
      <li>Bok Choy</li>
      <li>Brussels Sprouts</li>
      <li>Cabbage</li>
      <li>Carrots</li>
      <li>Cauliflower</li>
      <li>Celery</li>
      <li>Swiss Chard</li>
      <li>Collard Grens</li>
      <li>Grapefruit</li>
      <li>Kale</li>
      <li>Leeks</li>
      <li>Lemons</li>
      <li>Onions</li>
      <li>Oranges</li>
      <li>Parsnips</li>
      <li>Potatoes</li>
      <li>Turnips</li></p>
      </div><div role="tabpanel" class="tab-pane fade" id="spring"><h3>Spring</h3>
      <img src="images/image5-sml.png" alt="lettuce" align="right">
      <p><li>Apricots</li>
      <li>Artichokes</li>
      <li>Arugular</li>
      <li>Asparagus</li>
      <li>Beets</li>
      <li>Broccoli</li>
      <li>Green Onions</li>
      <li>Celery</li>
      <li>Kale</li>
      <li>Peas</li>
      <li>Radishes</li>
      <li>Rhubarb</li>
      <li>Spinach</li>
      <li>Squash</li>
      <li>Strawberries</li>
      <li>Zucchini</li></p></div>

  </div> <!-- END TAB CONTENT -->
</div>	<!-- COLUMN -->	
		</div> <!-- END PANEL BODY -->
		
      </div> <!-- END PANEL PRIMARY -->
      </div> <!-- END CONTAINER -->
<?php
  get_footer();
?>
