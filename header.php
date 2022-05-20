<?php
function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>KM Tooling<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="KM Tooling is a leader in precision mold design and manufacturing, trim die fabrication, and custom precision machining. Our expertise is key in turning your ideas into reality, successfully and on-time. We credit our expertise to our Journeyman Tool and Die Makers, Engineers, Pattern Makers, Jig and Fixture makers, and Machinists who in total have more than 250 years in the industry.">
    <meta name="keywords" content="mold design, manufacturing, trim die fabrication custom precision machining, machining, custom machining, die makers, jig makers, fixture makers, machinists, tool makers, vertical machining, sinker and wire edm, cnc turning, surface grinding, welding, cnc milling, km tooling, km tool, kmt delivers, rubber industry, polyurethane industry, mold construction, Knuth Machine Tool">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css<?php echo "?".filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="inc/bootstrap-collapse.js"></script>
    <!--<script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>-->
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

    <!-- BEGIN Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-63659948-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- END Google Analytics -->
  </head>
  <body>

    <header>
      <a href="."><img src="images/logo.png" alt="KM Tooling" id="logo"></a>

      <div id="topmenu">
        262-377-1677 | <a href="careers.php">Careers</a> | <a href="contact.php">Email Us</a> <a href="https://www.linkedin.com/company/km-tooling" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
      </div>

      <form class="search" method="POST" action="search.php">
        <input type="text" name="search"><button type="submit"><i class="fa fa-search"></i></button>
      </form>

      <a id="menu-toggle" data-toggle="collapse" data-target="#menu" class="fa fa-bars"></a>

      <nav id="menu" class="collapse">
        <ul class="clearfix">
          <li><a href=".">HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="services.php">SERVICES</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
          <li class="mobile"><a href="careers.php">CAREERS</a></li>
          <li class="mobile menublue">262-377-1677 &nbsp; / &nbsp; <a href="https://www.linkedin.com/company/km-tooling">LinkedIn</a></li>
        </ul>
      </nav>
    </header>

    <?php if (!isset($PageTitle)) { ?>
    <div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="8000">
      <p class="cycle-pager"></p>
      <div style="background: url(images/home-banner1.jpg) top center no-repeat;">
        <div>
          <div>
            <h1>CUSTOM PRECISION MACHINING</h1>
            KM Tooling's expertise in precision mold making translates to our common-sense approach in providing cost-effective solutions with fast turnaround.<br>
            <br>
            <a href="services.php">READ MORE <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <?php } else { ?>
    <div id="subheader">
      <div>
        <article>
          <?php echo $PageTitle; ?>
        </article>
      </div>
    </div>
    <?php } ?>
    <div class="metal <?php if ((!isset($PageTitle)) || (isset($MetalWhite))) echo "metal-home" ?>"></div>
