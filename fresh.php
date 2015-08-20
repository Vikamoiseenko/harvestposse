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
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#fresh" aria-controls="fresh" role="tab" data-toggle="tab">Fresh List</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home"><h3>Home</h3>
      <p>Rhoncus magna nec enim, et proin aliquet mid, porta magnis.</p></div>
    <div role="tabpanel" class="tab-pane fade" id="profile"><h3>Profile</h3>
      <p>Odio mattis, non ut! Porttitor nunc phasellus cras elementum.</p></div>
    <div role="tabpanel" class="tab-pane fade" id="messages"><h3>Messages</h3>
      <p>Enim hac tristique elementum, nec rhoncus porttitor sagittis cum.</p></div>
    <div role="tabpanel" class="tab-pane fade" id="fresh">
					<div class="col-md-2"></div>
                  <div class="col-md-8"><h4>Fresh List</h4><a class="twitter-timeline"  href="https://twitter.com/search?q=%23SeattleFarmMkts%2C%20%23UDistrictFarmersMkt%2C%20%23WSeattleFarmersMkt%2C%20%23CapHillFarmersMkt%2C%20%23PhinneyFarmersMkt%2C%20%23MagnoliaFarmersMkt%2C%20%23ColCityFarmersMkt%2C%20%23LkCityFarmersMkt%2C%20%23SeattleFarmMktFresh%2C%20%23SeattleFreshList" data-widget-id="633792383939821569">Tweets about #SeattleFarmMkts, #UDistrictFarmersMkt, #WSeattleFarmersMkt, #CapHillFarmersMkt, #PhinneyFarmersMkt, #MagnoliaFarmersMkt, #ColCityFarmersMkt, #LkCityFarmersMkt, #SeattleFarmMktFresh, #SeattleFreshList</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
				<div class="col-md-2"></div>
          </div>
  </div> <!-- END TAB CONTENT -->
</div>	<!-- COLUMN -->	
		</div> <!-- END PANEL BODY -->
		
      </div> <!-- END PANEL PRIMARY -->
      </div> <!-- END CONTAINER -->
<?php
  get_footer();
?>
