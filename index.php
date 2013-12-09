<!DOCTYPE html>
<!-- rsync -avz --progress /Applications/AMPPS/www/hummingmississippi popsn0@popsnorkle.com:public_html -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Humming Mississippi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet" />

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="#top">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#video">Video</a></li>
        <li><a href="#photos">Photos</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <!-- /Side Menu -->
  
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1>Humming Mississippi</h1>
        <h3>An <em>interactive sculpture</em> and <em>visualization</em> of the <em>Mississippi River</em>.</h3>
        <a href="#about" class="btn btn-default btn-lg">Find Out More</a>
                <a href="#" class="btn btn-primary btn-lg">Web Interaction <small><em>Coming Soon</em></small></a>

      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2>About the project</h2>
            <p class="lead">Humming Mississippi is a sculpture by <a target="_blank" href="http://frederickostrenko.com/">Derick Ostrenko</a> and <a target="_blank" href="http://allisonic.com/">Jesse Allison</a> that performs a section of the Mississippi River on resonant wood planks as an organic instrument. In collaboration with researchers from Louisiana State University’s Coastal Hydraulics Lab a LIDAR scan of the Mississippi River floor was used to mill 18 miles of riverbed into individual planks of cedar. Small transducers attached to the back of each plank transform the board into a speaker colored by the individual characteristics of the wood and influenced by the carving of the river’s contours. The audio composition is generated based off a linear reading of river topology combined with a sonification of real-time river data including temperature, salt content, flow rate, and river height.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
  
    <!-- video -->
<div id="video" class="map">
            <iframe src="http://player.vimeo.com/video/80751511" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
          </div>

    <!-- /video -->

    <!-- Callout -->
    <div class="callout">
      <div class="vert-text">
        <h1>Photos of the Installation</h1>
      </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="photos" class="portfolio">
      <div class="container">

<?php

require_once("php/phpFlickr.php");
$phpFlickrObj = new phpFlickr('86d9e2cb5d4848f309a024b24b094fe8');
$user = $phpFlickrObj->people_findByUsername('dostrenko');
$user_url = $phpFlickrObj->urls_getUserPhotos($user['id']);
$photos = $phpFlickrObj->photosets_getPhotos('72157638260922175', NULL, NULL, 12, NULL);

echo '<div class="row"> <div class="col-md-12 col-md-offset-1 text-center">';
foreach ($photos['photoset']['photo'] as $photo) {
  echo '<a href="'.$phpFlickrObj->buildPhotoURL($photo, "large").'" data-lightbox="roadtrip" class="center-cropped thumbnail" style="background-image:url('.$phpFlickrObj->buildPhotoURL($photo, "large").');">';
  echo '</a>';
}

echo '</div></div>';

?>


      </div>
    </div>
    <!-- /Portfolio -->

    <!-- contact -->
    <div id="contact" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Get in touch</h2>
            <hr>
            <div class="row">
            <div class="col-md-6">
            <p class="lead"><strong>Derick Ostrenko</strong>, is a media artist and Assistant Professor at Louisiana State University (LSU). He holds a joint-appointment in the Digital Art concentration at the School of Art and the Cultural Computing research group at the Center for Computation and Technology (CCT). Derick creates physical and virtual systems that examine the intersections of media, culture, and technology. 

            <br /> <br /> Website: <a href="http://frederickostrenko.com">http://frederickostrenko.com</a> <br /> Email: <script type="text/javascript" language="javascript">
<!-- // Generated by http://rumkin.com/tools/mailto_encoder
ML="<in>re\"@m .o=lstfk:adh/u";
MI="0C9E45@<68C1=?;BD;>?452A;7=>G:5DG63D;>?452A;7=>G:5DG0FC3";
OT="";
for(j=0;j<MI.length;j++){
OT+=ML.charAt(MI.charCodeAt(j)-48);
}document.write(OT);
// --></script>
<noscript>You need JavaScript to see my email address</noscript> </p>
            </div>
            <div class="col-md-6">
            <p class="lead"><strong>Jesse Allison</strong> is a professor at LSU in Experiment Music & Digital Media. As part of the AVATAR initiative, he is actively performing research and collaboration into ways that technology can expand what is possible in the arts. Prior to coming to LSU, he helped to found the Institute for Digital Intermedia Art at Ball State University. He is also President of Hardware Engineering of Electrotap, LLC. 
            <br /><br /> Website: <a href="http://allisonic.com/">http://allisonic.com</a> <br />Email: <script type="text/javascript" language="javascript">
<!-- // Generated by http://rumkin.com/tools/mailto_encoder
ML="a=.l\"e:f>t/nihrjo md<@su";
MI="D0A=>5714B0<39@6?9033<F@;E3FG25CG48?9033<F@;E3FG25CGD:08";
OT="";
for(j=0;j<MI.length;j++){
OT+=ML.charAt(MI.charCodeAt(j)-48);
}document.write(OT);
// --></script>
<noscript>You need JavaScript to see my email address</noscript></p>
            </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- /contact -->


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/lightbox-2.6.min.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

  </body>

</html>