<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>KM Tooling<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">
    
    <meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css">
    
    <script type="text/javascript" src="inc/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="inc/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>
    
    <!--[if lt IE 9]><script src="inc/modernizr-2.6.2-respond-1.1.0.min.js"></script><![endif]-->
    <!--[if lt IE 7 ]>
    <script type="text/javascript" src="inc/dd_belatedpng.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
    <![endif]-->
  </head>
  <body>
    
    <header>
      <a href="."><img src="images/logo.png" alt="KM Tooling" id="logo"></a>

      <div id="topmenu">
        262-377-1677 | <a href="careers.php">Careers</a> | <a href="contact-us.php">Email Us</a> <a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
      </div>

      <form id="search" method="POST" action="search.php">
        <input type="text" name="q"><button type="submit"><i class="fa fa-search"></i></button>
      </form>

      <a id="menu-toggle" data-toggle="collapse" data-target="#menu" class="fa fa-bars"></a>
      
      <nav id="menu" class="collapse">
        <ul class="clearfix">
          <li><a href=".">HOME</a></li>
          <li><a href="about-us.php">ABOUT US</a></li>
          <li><a href="services.php">SERVICES</a></li>
          <li>
            <a href="contact-us.php">CONTACT US <i class="fa fa-caret-down"></i></a>
            <ul>
              <li><a href="location.php">LOCATION</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    
    <div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="8000">
      <p class="cycle-pager"></p>
      <div style="background: url(images/home-banner1.jpg) top center no-repeat;">
        <div>
          <h1>CUSTOM PRECISION MACHINING</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.<br>
          <br>
          <a href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
      <div style="background: url(images/home-banner2.jpg) top center no-repeat;">
        <div>
          <h1>DON'T USE THIS IMAGE</h1>
          Bacon ipsum dolor amet swine kevin beef fatback. Drumstick sausage kielbasa porchetta, leberkas brisket pork ham beef. Tri-tip doner short loin cupim short ribs.<br>
          <br>
          <a href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
      <div style="background: url(images/home-banner3.jpg) top center no-repeat;">
        <div>
          <h1>REPLACE THIS IMAGE TOO</h1>
          Meatball ground round cupim, rump bresaola fatback ball tip. Tongue fatback drumstick prosciutto boudin capicola salami jerky jowl sirloin rump bacon.<br>
          <br>
          <a href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
    <div id="metal"></div>
    
    <article id="home">
      <h1>Ideas Delivered.</h1>

      <strong>KM Tooling</strong> is a leader in precision mold design and manufacture, trim die fabrication, and custom precision machining. Our expertise is key in turning your ideas into reality, successfully and on-time.
    </article>

    <article id="spiffs">
      <a href="#" class="spiff spiff-left">
        <h1>MOLD DESIGN &amp; MANUFACTURE</h1>
        <div class="spiff-img"><img src="images/spiff-hover.png" alt=""></div>
        <div class="spiff-text">
          Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim vteur sint occaelaudantium, totam rem aperiam.
        </div>
        <div class="readmore">READ MORE <div class="fa fa-chevron-right"></div></div>
      </a>

      <a href="#" class="spiff spiff-mid">
        <h1>TRIM DIE FABRICATION</h1>
        <div class="spiff-img"><img src="images/spiff-hover.png" alt=""></div>
        <div class="spiff-text">
          Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim vteur sint occaelaudantium, totam rem aperiam.
        </div>
        <div class="readmore">READ MORE <div class="fa fa-chevron-right"></div></div>
      </a>

      <a href="#" class="spiff spiff-right">
        <h1>CUSTOM MACHINING</h1>
        <div class="spiff-img"><img src="images/spiff-hover.png" alt=""></div>
        <div class="spiff-text">
          Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim vteur sint occaelaudantium, totam rem aperiam.
        </div>
        <div class="readmore">READ MORE <div class="fa fa-chevron-right"></div></div>
      </a>

      <div style="clear: both;"></div>
    </article>
    
    <div id="footer-wrap">
      <footer>
        <div class="footer-left">
          <h2>RELIABLE QUALITY</h2>

          Formerly Knuth Machine Tool, KMT has been designing &amp; manufacturing precision molds, tools, and trim dies since 1960. Our up-to-date experience &amp; well-maintained equipment results in reliable quality.

          <a href="#" class="more">DISCOVER MORE <i class="fa fa-chevron-right"></i></a>
        </div>

        <div class="footer-mid">
          <h2>WORK WITH US</h2>

          Please contact KMT for a quote or for more information at <a href="mailto:sales@kmtdelivers.com">sales@kmtdelivers.com</a> or<br>
          <br>
          <br>

          <span class="phone">(262) 377-1677</span>
        </div>

        <div class="footer-right">
          <h2>LOCATION</h2>

          <h3>FACTORY</h3>
          1668 9th Avenue<br>
          Grafton, WI 53024<br>
          <br>

          <h3>HEADQUARTERS</h3>
          701 Sunset Road<br>
          Port Washington, WI 53074
        </div>

        <div style="clear: both;"></div>
      </footer>
    </div>

    <footer>
      <div id="copyright">
        &copy; <?php echo date("Y"); ?> KM Tooling. All Rights Reserved. Website by <a href="http://www.foresitegrp.com">Foresite Group</a>.
      </div>

      <div id="footer-menu">
        <a href=".">HOME</a>
        <a href="about-us.php">ABOUT US</a>
        <a href="services.php">SERVICES</a>
        <a href="contact-us.php">CONTACT US</a>
        <a href="location.php">LOCATION</a>

        <a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
      </div>

      <div style="clear: both;"></div>
    </footer>

    <a href="#" id="backToTop" class="fa fa-arrow-up fa-2x"></a>
    
  </body>
</html>