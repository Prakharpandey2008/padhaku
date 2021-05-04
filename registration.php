
<?php session_start();
require_once('dbconnection.php');


//Code for Registration 
if(isset($_POST['submit1']))
{
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $wcontact=$_POST['wcontact'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $course=$_POST['course'];
  
  
$sql=mysqli_query($con,"select id from user where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
  $msg=mysqli_query($con,"insert into user(fname,email,contactno,wcontactno,address,city,course) values('$fname','$email','$contact','$wcontact','$address','$city','$course')");

if($msg)
{
  echo "<script>alert('Register successfully');</script>";
}
else{
  echo"NO";
}
}
}
if (isset($_POST['submit1']))
    {   
    ?>
<script type="text/javascript">
window.location = "product.php";
</script>      
    <?php
    }

?>
<!DOCTYPE html>
<html>
<head>
<title>Form site</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

       
<style type="text/css">
  body{
    padding: 0;
    margin: 0;
  }
  h3{
    
    text-align: center;
  }
  
  .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text]{
  width: 90%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=password]{
  width: 90%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=radio]
{
  display: flex;
  justify-content: space-around;
}
select
{
   width: 90%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  display: flex;
  justify-content: space-around;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
.space{
  margin-bottom: 20px;
}



@media (max-width: 740px) {

  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

  <div class="col-100">
    <div class="container">
      <form name="registration" method="post" action="" enctype="multipart/form-data">

        <div class="row">
          <div class="col-50">
            <h3>USER Registration</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" value="<?php echo $_POST["fname"]; ?>" placeholder="john"required>
            
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $_POST["email"]; ?>" placeholder="john@example.com"required>
            <label for="contact"><i class="fa fa-telephone"></i> Phone No.</label>
            <input type="text" id="phone" name="contact" placeholder="+91"required>
            <label for="wcontact"><i class="fa fa-telephone"></i> WhatsApp No.</label>
            <input type="text" id="phone" name="wcontact" value="<?php echo $_POST["wcontact"]; ?>" placeholder="+91"required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="XYZ"required>

            <div class="row">
              
              <div class="col-50">
                
                
                <label for="course">Course</label>
                <select id="course" name="course">
                <option value="">None</option>
                <option value="Crash Course" data-amount="500" data-id="3">Crash Course</option>
                
   
  </select>
  
  <div class="space"></div>
                
              
            <br>

            
          </div>

         

        </div>
        <label>
          
        <input type="submit" value="Continue to checkout" class="btn sub" name="submit1">
      </form>
    </div>
  </div>


</body>
</html>

