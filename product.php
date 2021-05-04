<?php
    require_once('config.php');
    require_once('database.php');

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Razorpay Integartion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">




        <style>
          body{
            padding-top: 0;
          }
            .razorpay-payment-button{
                 background:#6c5ce7;
                 color:whitesmoke;
                 font-size:0.8rem;
                 text-transform:uppercase;
                 letter-spacing:1;
                 display:block;
                 width:15vw;
                 height:8vh;
                 border:none;
                 padding:0.3rem 0.3rem;
            }
            .img_size{
                 margin:0 auto;
                 width:180px;
                 height:180px;
            }
            figcaption{
                 text-align:center;
                 letter-spacing:1;
            }
            .card-body{
                 font-size:0.8rem;
                 font-weight:bold;
            }
            .pad{
              margin-bottom: 300px;
            }
        </style>
    </head>
    <body>
      <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="product.php" class="navbar-brand">PADHAKU</a>
               </div>

               <!-- MENU LINKS -->


          </div>
     </section>



        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container" style="margin:0 auto;">
          <br/>

         <div class="row">
               <div class='col-sm-4 col-md-4 col-xs-4'>
               <div class="card">
  <div class="card-header"><figure>
            <img src="./images/1.jpg" alt="Comming Soon"width="300px" height="180px"/>
            <figcaption></figcaption>
  </figure></div>
  <div class="card-body"><p>Comming Soon</p>
                            <span>00 Reviews &nbsp;&nbsp; 00 orders</span></div>
  <div class="card-footer"><span class="price-new"> &#8377;00 </span><del class="price-old">&#8377;00</del>
                                <a href="#" class="btn btn-sm btn-primary float-right buy_now1" data-amount="1000" data-id="2">Order Now</a> </div>
</div>

               </div>

               <div class='col-sm-4 col-md-4 col-xs-4'>
               <div class="card">
  <div class="card-header"><figure>
            <img src="./images/1.jpg" alt="Crash Course"width="300px" height="180px"/>
            <figcaption></figcaption>
  </figure></div>
  <div class="card-body"><p>Crash Course with Mock Test</p>
                            <span>39 Reviews &nbsp;&nbsp; 94 orders</span></div>
  <div class="card-footer"><span class="price-new"> &#8377;500</span>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="500" data-id="3">Order Now</a></div>
</div>

               </div>
               <div class='col-sm-4 col-md-4 col-xs-4'>
               <div class="card">
  <div class="card-header"><figure>
            <img src="./images/1.jpg" alt="Premium+Premium"width="300px" height="180px"/>
            <figcaption></figcaption>
  </figure></div>
  <div class="card-body"><p>Comming Soon</p>
                            <span>00 Reviews &nbsp;&nbsp; 00 orders</span></div>
  <div class="card-footer"><span class="price-new"> &#8377;00</span>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now1" data-amount="890" data-id="5">Order Now</a></div>
</div>

               </div>
         </div>

       </div>
       <div class="pad"></div>

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
                                   <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var contact_number = $("#contact").attr("value");
    var options = {
    "key": "rzp_test_rD5goFsBwiUtIA",
    "amount": totalAmount * 100, // 2000 paise = INR 20
    "name": "Biology Phobia",
    "description": "Payment Cart",
    "currency":"INR",
    "image": "./img/apple-touch-icon.png",
    "handler": function (response){
            $.ajax({
            url: 'razorPaySuccess.php',
            type: 'post',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            },
            success: function (msg) {

            window.location.href = 'thanks.php';
            }
        });

    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
   rzp1.open();
  e.preventDefault();
  });

</script>

    </body>
</html>
