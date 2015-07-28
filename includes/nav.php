<?php
  /* tag_page checks if a given link refers to the current page. If it does, it returns a string describing the css markup for a selected link. */
  function tag_page($page) {
    if (PAGE_NAME === $page) {
      return 'class="active"';
    }
  }
?>

<nav class="navbar navbar-default">
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
        <li <?php echo tag_page('index.php');?>><a href="index.php">Home</a></li>
        <li <?php echo tag_page('about.php');?>><a href="about.php">About Us</a></li>
        <li class="dropdown">
          <a href="markets.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Markets<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php echo tag_page('udistrict.php');?>><a href="udistrict.php" >U-District</a></li>
            <li <?php echo tag_page('caphill.php');?>><a href="caphill.php">Capitol Hill</a></li>
            <li <?php echo tag_page('wseattle.php');?>><a href="wseattle.php">West Seattle</a></li>
            <li <?php echo tag_page('columbia.php');?>><a href="columbia.php">Columbia City</a></li>
            <li <?php echo tag_page('lake.php');?>><a href="lake.php">Lake City</a></li>
            <li <?php echo tag_page('phinney.php');?>><a href="phinney.php">Phinney</a></li>
            <li <?php echo tag_page('magnolia.php');?>><a href="magnolia.php">Magnolia</a></li>               
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vendors<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php echo tag_page('newvendors.php');?>><a href="newvendors.php">New Vendors</a></li>
            <li <?php echo tag_page('vendors.php');?>><a href="vendors.php">Vendors</a></li>
          </ul>
        </li>
        <li><a href="fresh.php">Fresh List</a></li>            
      </ul>
        </li>
        <li><a href="faq.php">FAQ's</a></li>            
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
