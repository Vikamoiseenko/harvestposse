<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="lib/jquery-ui-1.10.4/themes/base/jquery.ui.accordion.css"/>
     <script src="lib/jquery-ui-1.10.4/ui/jquery.ui.accordion.js"></script>
    <title>Harvest Posse</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <script>
      $(function() {
        $( "#accordion" ).accordion();
      });
      </script>
  </head>

  <body role="document">

    <div class="page-header"><h1>Harvest Posse Logo Goes Here</h1></div>
      
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            
            <li class="dropdown">
              <a href="markets.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Markets<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">U-District</a></li>
                <li><a href="#">Capital Hill</a></li>
                <li><a href="#">West Seattle</a></li>
                <li><a href="#">Columbia City</a></li>
                <li><a href="#">Lake City</a></li>
                <li><a href="#">Phinney</a></li>
                <li><a href="#">Magnolia</a></li>               
              </ul>
                </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vendors<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li  class="active"><a href="newvendors.php">New Vendors</a></li>
                <li><a href="vendors.php">Vendors</a></li>
              </ul>
                </li>

            <li><a href="#">Fresh List</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">How to become a Vendor</h3>
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
                               data-parent="#accordion">Section 1</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="first">
                            <div class="panel-body">
                                <p>     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#second"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Section 2</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="second">
                            <div class="panel-body">
                                <p>     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#third"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Section 3</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="third">
                            <div class="panel-body">
                                <p>     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. </p>
                            </div>
                        </div>
                    </div>
                                        <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#third"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Section 4</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="third">
                            <div class="panel-body">
                                <p>     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. </p>
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
    
        
    <!-- sitemap -->
    <div class="well hidden-xs">
      <h2>Site Map</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li>Markets
          <ul>
            <li><a href="#">U-District</a></li>
            <li><a href="#">Capital Hill</a></li>
            <li><a href="#">West Seattle</a></li>
            <li><a href="#">Columbia City</a></li>
            <li><a href="#">Lake City</a></li>
            <li><a href="#">Phinney</a></li>
            <li><a href="#">Magnolia</a></li> 
          </ul>
        </li>
        <li><a href="#">Fresh List</a></li>
      </ul>
    </div>
    
    
    </div> <!-- /container -->
        
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; 2015 Team Catamount. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
