<!DOCTYPE html>
<?php
  include_once ("includes/globals.php");  
  get_header();
?>

    <div class="container theme-showcase" role="main">
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">FAQ's</h3>
        </div>
        <div class="panel-body">
        
        <div class="row">
           <!-- <div class="col-md-4"> -->
                <div id="accordion" class="panel-group">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                            <a href="#first"
                               data-toggle="collapse"
                               data-parent="#accordion">Q. Are pets allowed in the markets?</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="first">
                            <div class="panel-body">
                                <p> A.	Absolutely! However, you will be asked to remove your pet if they are misbehaving or causing problems. Please be respectful to vendors and their food products, as well as other market attendants - have your pet on a leash, and please assure they are well behaved during your time at the neighborhood markets. </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#second"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Q.	Why are other markets like Pikes Place and Ballard not on your site?</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="second">
                            <div class="panel-body">
                                <p> A.	The markets we have focused on are all a part of the Neighborhood Farmers Markets Alliance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#third"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Q.	Do the neighborhood markets accept EBT (SNAP/food stamps)? </a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="third">
                            <div class="panel-body">
                                <p>A.	Yes! It's quite easy - at the market information booth, the market staff will swipe your EBT card for the amount you request. You will then be given wooden market tokens to buy anything except cut flowers, alcohol, and ready to eat foods. The tokens never expire and can be used at all 7 of our farmers markets at any time.</p>
                            </div>
                        </div>
                    </div>
                                        <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#third"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Q.	Do the neighborhood markets accept credit or debit cards? </a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="third">
                            <div class="panel-body">
                                <p>A.	Many vendors and farmers at the various markets do accept credit/debit cards, but you should always bring cash to the market just to be prepared. </p> 
                            </div>
                        </div>
                    </div>

                                        <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#third"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Q.	How I become a vendor? </a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="third">
                            <div class="panel-body">
                                <p> A.	Go <a href="http://www.akashtolangee.com/harvestposse-master/newvendors.php"> here </a> and fill out the form we have made available - someone will be in touch with you shortly.</p>
                            </div>
                        </div>
                    </div>

                </div>
           <!-- </div> -->


        </div>
    
    <script src="lib/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="lib/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
    <script src="lib/jquery-ui-1.10.4/ui/jquery.ui.core.js"></script>
    <script src="lib/jquery-ui-1.10.4/ui/jquery.ui.widget.js"></script>
    <script src="lib/jquery-ui-1.10.4/ui/jquery.ui.accordion.js"></script>
    <script src="lib/bootstrap.min.js"></script>
    <script src="lib/fabric.min.js"></script>
  </div>
  </div>              
<?php
  get_footer();
?>