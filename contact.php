<?php
$PageTitle = "Contact Us";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupKMTooling";
?>

<div class="gray">
  <article>
    <h1>Ideas Delivered</h1>

    <strong>KM Tooling</strong> is a leader in precision mold design and manufacture, cold forming die construction, trim die fabrication, and custom, precision machining. Our expertise is key in turning your ideas into reality, successfully and on-time.
  </article>
</div>

<article>
  <div class="half-left">
    <h2>Get In Touch</h2>
    
    <?php
    if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
      if (
            $_POST[md5('fullname' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
            $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
          ) {
        // All required fields have been filled, so construct the message
        $SendTo = "kmtsales@kmtdelivers.com";
        $Subject = "Message From KM Tooling Website";
        $Headers = "Bcc: foresitegroupllc@gmail.com\r\n";
        $Headers .= "From: Contact Form <donotreply@kmtdelivers.com>\r\n";
        $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
        
        $Message = "Message from " . $_POST[md5('fullname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";

        if (!empty($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\n" . $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])];

        if (!empty($_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\n" . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])];

        $Message .= "\n\n";
        
        if (!empty($_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
        
        $Message = stripslashes($Message);
        
        // mail($SendTo, $Subject, $Message, $Headers);

        require_once "inc/swiftmailer/swift_required.php";

        $sm = Swift_Message::newInstance();
        $sm->setTo(array("kmtsales@kmtdelivers.com"));
        $sm->setBcc(array("foresitegroupllc@gmail.com"));
        $sm->setFrom(array("donotreply@foresitegrp.com" => "Contact Form"));
        $sm->setReplyTo($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])]);
        $sm->setSubject("Message From KM Tooling Website");
        $sm->setBody($Message);

        // Create the Transport and Mailer
        $transport = Swift_MailTransport::newInstance();
        $mailer = Swift_Mailer::newInstance($transport);
        
        // Send it!
        $result = $mailer->send($sm);
        
        echo "<strong>Your message has been sent!</strong><br>\n<br>\nThank you for your interest in KM Tooling.  You will be contacted shortly.";
      } else {
        echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
      }
    } else {
    ?>
    Please contact us for a quote and/or for more information, or call us at <strong>(262) 377-1677</strong>.<br>
    <br>
    
    <span style="font-size: 80%;">* Required fields</span><br>
    <br>

    <script type="text/javascript">
      function checkform (form) {
        if (document.getElementById('fullname').value == "") { alert('Full Name required.'); document.getElementById('fullname').focus(); return false ; }
        if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
        return true ;
      }
    </script>

    <form action="contact.php" method="POST" onSubmit="return checkform(this)" id="contact">
      <div>
        <label for="fullname">Full Name</label>
        <input type="text" name="<?php echo md5("fullname" . $ip . $salt . $timestamp); ?>" id="fullname" placeholder="* Full Name"><br>
        <br>

        <label for="company">Company</label>
        <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company" placeholder="Company"><br>
        <br>

        <label for="phone">Phone Number</label>
        <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone Number"><br>
        <br>

        <label for="email">Email</label>
        <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
        <br>

        <label for="message">Message</label>
        <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="Message"></textarea><br>
        <br>

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>
          
        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <button type="submit" name="submit">SEND MESSAGE</button>
      </div>
    </form>
    <?php } ?>
  </div>

  <div class="half-right">
    <div class="embed">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5802.1244969455975!2d-87.93027006771811!3d43.35480850055959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8804ef6034ddeaf5%3A0x1ba07ff2e7f827cd!2sKM%20Tooling!5e0!3m2!1sen!2sus!4v1571160743300!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <br>

    <hr>
    <br>

    <h3>FACTORY</h3>
    2143 County Highway W<br>
    Grafton, WI 53024<br>
    <br>

    <h3>HEADQUARTERS</h3>
    PO Box 529<br>
    Port Washington, WI 53074
  </div>

  <div style="clear: both;"></div>
</article>

<br>
<br>

<?php include "footer.php"; ?>