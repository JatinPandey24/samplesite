<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Krishna Dairy | Contact</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
 <style type="text/css">
   .contact-icon{
    background-color: red !important;
   }
   input[type="text"]{
    border-bottom: 1px solid red;
    border-top: 1px solid grey;
   }
   input[type="email"]{
    border-bottom: 1px solid red;
    border-top: 1px solid grey;
   }
   .famie-btn{
    background-color: red;
   }
 </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
 

    <!-- Navbar Area -->
    <nav id="topnav">
      Email : info@krishnadairy.co || Phone : +91 81693 84430
    </nav>
    <div class="famie-main-menu" style="padding-top: 30px;">
      <div class="classy-nav-container breakpoint-off" id="navbottom">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.php" class="nav-brand"><img src="img/newimg/logo header.png" alt="" style="max-width: 90%; margin-top: 32%;"></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About us</a></li>
                  <li><a href="#">PRODUCTS</a>
                    <ul class="dropdown">
                      <li><a href="ghee.php" style="font-size: 16px !important;">COW GHEE</a></li>
<!--                       <li><a href="butter.html" style="font-size: 16px !important;">BUTTER</a></li>
                      <li><a href="butteroil.html" style="font-size: 16px !important;">BUTTER OIL</a></li> -->
                      <!-- <li><a href="amf.html" style="font-size: 16px !important;">AMF</a></li> -->

                    </ul>
                  </li>

                  <li class="active"><a href="contact.php">Contact Us</a></li>
                </ul>
                   
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

       
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->


<!--   <div class="breadcrumb-area bg-img bg-overlay jarallax">
  
  </div>  -->

  <section class="contact-info-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
          
            <h2 style="color: red;"><span style="color: black;">Contact</span> Us</h2>
          
          </div>
        </div>
      </div>

      <div class="row">

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
            <div class="contact-icon">
              <i class="icon_pin_alt"></i>
            </div>
            <h5>Address</h5>
            <h6><b>Head Office</b> : B-405, Bhanu Apartment, Ruia Road Near Iskcon temple, Juhu, Mumbai-400049</h6>
          </div>
        </div>

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
            <div class="contact-icon">
              <i class="icon_phone"></i>
            </div>
            <h5>Phone</h5>

            <h6>+91 81693 84430</h6>
  
          </div>
        </div>

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
            <div class="contact-icon">
              <i class="icon_mail_alt"></i>
            </div>
            <h5>Email</h5>
            <h6><strong>Domestic Sales : </strong>info@krishnadairy.co</h6>
            <h6><strong>Export : </strong>exports@krishnadairy.co</h6>
          </div>
        </div>

      </div>
      <div class="c-border"></div>
    </div>
  </section>
  

 <section class="contact-area section-padding-100-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Contact Content -->
        <div class="col-12 col-lg-5">
          <div class="contact-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
          
              <h2 style="color: red;"><span style="color: black;">Get In Touch</span> With Us</h2>
          
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area">



             


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

 //$mail->Username = 'tex.jatin@gmail.com';               
 //$mail->Password = 'Jatin1234';                    

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


            <form method="post" id="reused_form" class="contact_form">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                  </div>
                </div>
                  <input id="sender" class="contact_input" type="hidden" name="sender" required maxlength="50" value="contact@alaknanda.co" placeholder="Mail">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email" name="email">
                  </div>
                  </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
                <textarea cols="30" rows="10" class="form-control" placeholder="Message" name="message"></textarea>
              </div>
              <div class="form-group" style="border: none; box-shadow: none;">
                <input type="submit" value="Send Message" name="submit" class="btn famie-btn">
              </div>
            </form>
            </div>
          </div>
        </div>

        <!-- Contact Maps -->
        <div class="col-lg-6">
          <div class="contact-maps mb-100">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.0337789476393!2d74.61141581497087!3d19.625853586774806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc8ac31e360ba7%3A0xb32d334c39f91c89!2sKrishna%20Dairy!5e0!3m2!1sen!2sin!4v1593114392651!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


          </div>
        </div>
      </div>
    </div>
  </section>


  
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
            </div><br>

       </div>

       <!-- <img src="img/newimg/Layer 23.png"> -->
       <a href="https://www.twitter.com"><i class="fa fa-twitter" style="color: white;"></i></a>
       <a href="https://www.facebook.com/alaknandaghee"><i class="fa fa-facebook" style="color: white; padding-left: 5%; padding-right: 5%;"></i></a>
       <a href="https://www.linkedin.com"><i class="fa fa-linkedin" style="color: white;"></i></a>
       <p style="margin-top: 10%;">KD 2020 All rights Reserved.<br>Made in India.</p>

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
  <!-- ##### Footer Area End ##### -->

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

                