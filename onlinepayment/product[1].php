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
        <style>
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
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container" style="margin:0 auto;">
          <br/>
         <div class="row" style="margin:0.4rem 0;">
            <div class="col-sm-12 col-md-12 col-xs-12" >
                <a href="table.php" target="_blank" class="btn btn-primary" style="float:right;">SHOW PAYMENT</a>
            </div>
         </div>
         <div class="row">
               <div class='col-sm-3 col-md-3 col-xs-3'>
               <div class="card">
  <div class="card-header"><figure>
            <img src="./img/red.png" width="180px" height="180px"/>
            <figcaption>Samsung</figcaption>
  </figure></div>
  <div class="card-body"><p>This is a Samsung Latest New Version Series</p>
                            <span>132 Reviews &nbsp;&nbsp; 154 orders</span></div>
  <div class="card-footer"><span class="price-new"> &#8377;1000 </span><del class="price-old">&#8377;1300</del>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="1000" data-id="2">Order Now</a> </div>
</div>

               </div>
               <div class='col-sm-3 col-md-3 col-xs-3'>
               <div class="card">
  <div class="card-header"><figure>
            <img src="./img/laptop.jpg" width="180px" height="180px"/>
            <figcaption>Laptop</figcaption>
            
  </figure></div>
  <div class="card-body"><p>This is a Laptop E-Series</p>
                            <span>132 Reviews &nbsp;&nbsp; 194 orders</span> </div>
  <div class="card-footer"><span class="price-new"> &#8377;19000 </span><del class="price-old">&#8377;23000</del>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="19000" data-id="3">Order Now</a></div>
</div>

               </div>
               <div class='col-sm-3 col-md-3 col-xs-3'>
               <div class="card">
  <div class="card-header"><figure>
            <img src="./img/mouse.jpg" width="180px" height="180px"/>
            <figcaption>Mouse</figcaption>
  </figure></div>
  <div class="card-body"><p>This is a Mouse MZ-Series</p>
                            <span>139 Reviews &nbsp;&nbsp; 294 orders</span></div>
  <div class="card-footer"><span class="price-new"> &#8377;200</span>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="200" data-id="3">Order Now</a></div>
</div>

               </div>
               <div class='col-sm-3 col-md-3 col-xs-3'>
               <div class="card">
  <div class="card-header"><figure>
            <img src="./img/speak.jpg" width="180px" height="180px"/>
            <figcaption>Speaker</figcaption>
  </figure></div>
  <div class="card-body"><p>This is a Mouse SpeZ-Series</p>
                            <span>189 Reviews &nbsp;&nbsp; 494 orders</span></div>
  <div class="card-footer"><span class="price-new"> &#8377;890</span>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="890" data-id="5">Order Now</a></div>
</div>

               </div>
         </div>

       </div>
        
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  
  $('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var contact_number = $("#contact").attr("value");
    var options = {
    "key": "rzp_test_rD5goFsBwiUtIA",
    "amount": totalAmount * 100, // 2000 paise = INR 20
    "name": "E-Commerce",
    "description": "Payment Cart",
    "currency":"INR",
    "image": "./img/eletter.png",
    "handler": function (response){
            $.ajax({
            url: 'razorPaySuccess.php',
            type: 'post',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
               
            //    window.location.href = 'thankyou.php';
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