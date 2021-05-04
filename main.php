<?php
session_start();
require_once('dbconnection.php');

//Code for Registration
if(isset($_POST['send']))
{
  $fname=$_POST['fname'];
  $email=$_POST['email'];

  $message=$_POST['message'];


$sql=mysqli_query($con,"select id from contact_us where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
  $msg=mysqli_query($con,"insert into contact_us(fname,email,message) values('$fname','$email','$message')");

if($msg)
{
  echo "<script>alert('Send successfully');</script>";
}
else{
  echo "<script>alert('Sorry Try Again');</script>";
}
}
}
if(isset($_POST['submits']))
{

  $email=$_POST['email'];




$sql=mysqli_query($con,"select id from subscription where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
  $msg=mysqli_query($con,"insert into subscription(email) values('$email')");

if($msg)
{
  echo "<script>alert('Send successfully');</script>";
}
else{
  echo "<script>alert('Sorry Try Again');</script>";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>PADHAKU</title>
<!--

Known Template

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->

<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">






</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">PADHAKU</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse important">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>

                         <li><a href="#team" class="smoothScroll">Courses</a></li>
                         <li><a href="registration.php" class="smoothScroll">Register</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="tel:9559994331"><i class="fa fa-whatsapp"></i> +91 9559994331</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Distance Learning Education Center</h1>
                                             <h3>Our online courses are designed to fit in your industry supporting all-round with latest technologies.</h3>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Start your journey with our practical courses</h1>
                                             <h3>Our online courses are built in partnership with technology leaders and are designed to meet industry demands.</h3>
                                             <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Efficient Learning Methods</h1>
                                             <h3>Biology is so important for you to qualify "NEET" and through our courses you can achieve your dream.</h3>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Pocket Friendly</h3>
                              <p style="font-size: 20px;">Why spending lots of money for buying course ? When we are here to help you with our pocket friendly course at minimum price.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>NCERT Is The Only Solution</h3>
                              <p style="font-size: 15px;">Don't worry ncert is much more sufficient to achieve the goal you want and we can help you with understanding each and every page of ncert more preciously and thoroughly.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>We Are Here To Help You!</h3>
                              <p style="font-size: 20px;">Our members provide the best learning strategy for you and can mentor you all to achieve your dream.</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Start your journey to a better life with online practical courses</h2>

                              <figure>
                                   <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Perfect Mentors</h3>
                                        <p>Our members provide the best learning strategy for you and can mentor you all to achieve your dream.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>Course Completion Certificate</h3>
                                        <p>After completing our course you will get certificate of completion.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Mock Test</h3>
                                        <p>We provide Mock Test with live discussion and 24 hours doubt service.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="registration.php" method="POST">
                                   <h2>Signup today</h2>
                                   <input type="text" name="fname" class="form-control" placeholder="Full name" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Your email address" required="">

                                   <input type="text" name="wcontact" class="form-control" placeholder="Your WhatsApp No." required="">

                                   <button class="submit-btn form-control" id="form-submit">Get started</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Popular Courses
<small>Upgrade your skills with newest courses</small></h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Comming Soon</h3>
                                   <span>Education is the key!</span>
                              </div>
                              <div class="courses-info">
                             <div class="courses-author">
                                                       <img src="images/profile1.png" class="img-responsive" alt="">
                                                       <span>Mehul</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#about"><span>Rs 00</span></a>
                                                  </div>
                                             </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Crash Course</h3>
                                   <span style="font-weight: bolder;">With Mock Test</span>
                              </div>
                              <div class="courses-info">
                              <div class="courses-author">
                                                       <img src="images/profile1.png" class="img-responsive" alt="">
                                                       <span>Mehul</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#about"><span>Rs 500</span></a>
                                                  </div>
                                             </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Comming Soon</h3>
                                   <span>Education is the key!</span>
                              </div>
                               <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/profile1.png" class="img-responsive" alt="">
                                                       <span>Mehul</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#about"><span>Rs 00</span></a>
                                                  </div>
                         </div>
                    </div>




               </div>
          </div>
     </section>





     <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Student Reviews <small></small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/profile1.png"  class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Nikhil</h4>
                                             <span>Mindursuccess Developer</span>
                                        </div>
                                        <p>You really do help young creative minds to get quality education and professional job search assistance. I’d recommend it to everyone!</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/profile2.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Sohail</h4>
                                             <span>Student</span>
                                        </div>
                                        <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher who was able to make it interesting.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>


                         </div>

               </div>
          </div>
     </section>
       <!--==========================
      Buy Ticket Section
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>BUY COURSES<small>Upgrade your skills with newest courses</small></h2>
                         </div>
                    </div>
               </div>
          </div>
     </section>


    <section id="buy-tickets" class="section-with-bg ">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">Rs 300</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <a href="registration.php"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">Rs 550</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <a href="registration.php"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">Rs 1000</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <a href="registration.php"><button type="button" class="btn" data-ticket-type="premium-access">Buy Now</button></a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>


    </section>
     Pro Tier -->




     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="POST">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="fname" required="">

                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>ABOUT US</h2>
                              </div>
                              <address>
                                   <p>Our firm provides best laerning method<br> with efficient solution.</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text">
                                   <p>Copyright &copy; 2020 mindursuccess</p>


                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p><a href="tel:7896541233">789456123</a></p>
                                   <p><a href="mailto:mindursuccessteam@gmail.com">mindursuccessteam@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Faculty</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="POST">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submits" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
        $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });
    </script>

</body>
</html>
