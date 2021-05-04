<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="manage-users.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css
    ">
  </head>

  <body>



<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      ADMIN
    </div>
<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
    <!-- Login Form -->
    <form method="post">
      <input type="text" id="inputEmail" class="fadeIn second" name="username" placeholder="Username">
      <input type="password" id="inputPassword" class="fadeIn third"  name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="login">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
