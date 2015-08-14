<!DOCTYPE html>
<?php
  include_once ("includes/globals.php");  
  get_header();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">
<style>
body {
  background: #404040;
  overflow: hidden;
}

ul.accordion {
  list-style-type: none;
  position: relative;
  top: 150px;
  font-family: "roboto", sans-serif;
  font-size: 16px;
  font-style: italic;
  line-height: 1.5em;
}

ul.accordion li {
  float: left;
  width: 150px;
  height: 300px;
  display: block;
  border-right: 2px solid #fff;
  border-bottom: 2px solid #fff;
  background: #fff;
  background-repeat: no-repeat;
  background-position: center center;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  -webkit-box-shadow: 1px 3px 5px #555;
  -moz-box-shadow: 1px 3px 5px #555;
  box-shadow: 1px 3px 5px #555;
}

ul.accordion li.bg1 { background-image: url("http://lorempixel.com/1280/800/city"); }

ul.accordion li.bg2 { background-image: url("http://lorempixel.com/1280/800/cats"); }

ul.accordion li.bg3 { background-image: url("http://lorempixel.com/1280/800/abstract"); }

ul.accordion li.bg4 { background-image: url("http://lorempixel.com/1280/800/nightlife"); }

ul.accordion li.bleft { border-left: 2px solid #fff; }

ul.accordion li .heading {
  background: #fff;
  padding: 10px;
  margin-top: 60px;
  opacity: 0.9;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 1px;
  font-size: 14px;
  color: #444;
  text-align: center;
  text-shadow: -1px -1px 1px #ccc;
}

ul.accordion li .description {
  position: absolute;
  width: 480px;
  height: 175px;
  bottom: 0;
  left: 0;
  display: none;
}

ul.accordion li .description h2 {
  text-transform: uppercase;
  font-style: normal;
  font-weight: bold;
  letter-spacing: 1px;
  font-size: 45px;
  color: #444;
  text-align: left;
  margin: 0 0 15px 20px;
  text-shadow: -1px -1px 1px #ccc;
}

ul.accordion li .description p {
  line-height: 14px;
  margin: 10px 22px;
  font-family: "roboto", sans-serif;
  font-size: 12px;
  font-style: italic;
  font-weight: normal;
  text-transform: none;
  letter-spacing: normal;
  line-height: 1.6em;
}

ul.accordion li .description a {
  position: absolute;
  bottom: 5px;
  left: 20px;
  text-transform: uppercase;
  font-style: normal;
  font-size: 11px;
  text-decoration: none;
  color: #888;
}

ul.accordion li .description a:hover {
  color: #333;
  text-decoration: underline;
}

ul.accordion li .bgDescription {
  background: linear-gradient(0deg, #fff 40%, rgba(255,255,255,0));
  height: 340px;
  position: absolute;
  bottom: 0px;
  left: 0px;
  width: 100%;
  display: none;
}
</style>
</head>

<body>

<ul class="accordion" id="accordion">
  <li class="bg1">
    <div class="heading"><img src="../../Desktop/sites/bluehost/web202/image2-sml.png"</div>
    <div class="bgDescription"></div>
    <div class="description">
      <h2>Heading 1</h2>
      <p>Description 1</p>
      <a href="#">Read more</a> </div>
  </li>
</ul>

<ul class="accordion" id="accordion">
  <li class="bg2">
    <div class="heading">Fall</div>
    <div class="bgDescription"></div>
    <div class="description">
      <h2>Heading 2</h2>
      <p>Description 2</p>
      <a href="#">Read more</a> </div>
  </li>
</ul>

<ul class="accordion" id="accordion">
  <li class="bg3">
    <div class="heading">Winter</div>
    <div class="bgDescription"></div>
    <div class="description">
      <h2>Heading 3</h2>
      <p>Description 3</p>
      <a href="#">Read more</a> </div>
  </li>
</ul>

<ul class="accordion" id="accordion">
  <li class="bg4">
    <div class="heading">Spring</div>
    <div class="bgDescription"></div>
    <div class="description">
      <h2>Heading 4</h2>
      <p>Description 4</p>
      <a href="#">Read more</a> </div>
  </li>
</ul>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>
$(function(){
  $(".accordion > li").hover(
    function(){
      var $this = $(this);
      $this.stop().animate({"width": "480px"},500);
      $('.heading', $this).stop(true,true).fadeOut();
      $('.bgDescription', $this).stop(true,true).slideDown(500);
      $('.description',$this).stop(true,true).fadeIn();
    },
    function(){
      var $this = $(this);
      $this.stop().animate({"width": "150px"},1000);
      $('.heading', $this).stop(true,true).fadeIn();
      $('.bgDescription', $this).stop(true,true).slideUp(500);
      $('.description',$this).stop(true,true).fadeOut();
    }
  )
});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>

<?php
  get_footer();
?>
