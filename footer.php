  <style type="text/css">
    input[type="text"], input[type="email"], input[type="submit"], textarea{
      font-size: 16px;
    }

  </style>

                <?php

require 'phpmailer/PHPMailerAutoload.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/class.smtp.php';

if(isset($_POST['submit']) )
{

$postData = $_POST;
$email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$mail = new PHPMailer;
$sender = $_POST['sender'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.alaknanda.co';              // Specify main and backup SMTP servers
$mail->SMTPAuth = false;                               // Enable SMTP authentication

// $mail->Username = 'tex.jatin@gmail.com';               
// $mail->Password = 'Jatin1234';                    

$mail->Username = 'contact@alaknanda.co';               
$mail->Password = 'Krishnadairy12@';                        
$mail->SMTPSecure = 'none';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

// $mail->From = 'query.fiesta@gmail.com';
$mail->FromName = 'Mailer@alaknanda.co';
$mail->addAddress($_REQUEST['sender'], $name);     // Add a recipient
//$mail->addAddress('name@mysite.com');               // Name is optional

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New Query from your website!';

$mail->Body    = ' <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Subject:</b> '.$subject.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p></b>
                    <b><h2>Congratulations!</h2>
                    <p>You have successfully received an email from
<a href="http://www.alaknanda.co/">Alaknanda Dairy//</a>.</p>';

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';




if(!$mail->send()) {
    echo '<span style="color:green;font-weight:bold;font-size:25px"; >Message could not be sent.</span>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<span style="color:green;font-weight:bold;font-size:25px"; >Message has been sent.</span>' ;
}}
?>


  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer bg-img section-padding-80-0" style="background-color: #eb1c24; padding-top: 20px;">
      <div class="container">
        <div class="row">

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="footer-widget mb-80">
              <a href="#" class="foo-logo d-block mb-30"><img src="img/newimg/logo footer.png" alt=""></a>
            
            
            </div>
          </div>    

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-4">
		 
            <div class="footer-widget mb-80">
   			
            	<div class="row">
         		<div class="col-md-6">
         			<ul>
         				<li><a href="index.php" style="color: white;">Home</a></li>
         				<li><a href="infra.php" style="color: white;">Infrastructure</a></li>
         				<!-- <li><a href="contact.php" style="color: white;">Gallery</a></li>
         				<li><a href="contact.php" style="color: white;">Career</a></li> -->
         			</ul>
         		</div>
         		<div class="col-md-6">
         			<ul style="margin-bottom: 10%;">
         				<li><a href="about.php" style="color: white;">About Us</a></li>
         				<!-- <li><a href="contact.php" style="color: white;">Products</a></li>
         				<li><a href="contact.php" style="color: white;">CSR</a></li> -->
         				<li><a href="contact.php" style="color: white;">Contact</a></li>
         			</ul>
         		</div>
         		<br>

       </div>

       <!-- <img src="img/newimg/Layer 23.png"> -->
       <a href="https://www.twitter.com"><i class="fa fa-twitter" style="color: white;"></i></a>
       <a href="https://www.facebook.com/alaknandaghee"><i class="fa fa-facebook" style="color: white; padding-left: 5%; padding-right: 5%;"></i></a>
       <a href="https://www.linkedin.com"><i class="fa fa-linkedin" style="color: white;"></i></a>
       <p style="margin-top: 5%;">KD 2020 All rights Reserved.<br>Made in India.</p>

            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="footer-widget mb-80">
              <h5 class="widget-title" style="padding-left: 2%;">Contact Us/Query</h5>
              <!-- Footer Social Info -->
              <div class="footer-social-info">
           	 <form method="post">
             
                <input type="text" name="name" placeholder="Name">

                <input id="sender" class="contact_input" type="hidden" name="sender" required maxlength="50" value="contact@alaknanda.co" placeholder="Mail">
                
                <input type="email" name="email" placeholder="Email">
                
                <input class="form-control" placeholder="Subject" name="subject" value="Message From Krishna Dairy" type="hidden">

                <textarea placeholder="Message (Max 500 characters)" name="message" rows="4" maxlength="500"></textarea>
                <!-- <button class="btn homebtn">Submit </button> -->
                <input type="submit" name="submit" value="Send Message" class="btn homebtn">
             
              </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer>




  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="js/classynav.js"></script>
  <!-- Wow js -->
  <script src="js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
</body>

</html>