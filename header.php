<?php
function email($address, $name="") {
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
        262-377-1677 | <a href="careers.php">Careers</a> | <a href="contact.php">Email Us</a> <a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
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
        </ul>
      </nav>
    </header>
    
    <?php if ($PageTitle == "") { ?>
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
    <?php } else { ?>
    <div id="subheader">
      <article>
        <?php echo $PageTitle; ?>
      </article>
    </div>
    <?php } ?>
    <div class="metal <?php if (($PageTitle == "") || ($MetalWhite != "")) echo "metal-home" ?>"></div>
