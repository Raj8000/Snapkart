<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <title>Login</title>
 <link href = "css/bootstrap.min.css" rel = "stylesheet">
 
 <style>
 body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #ADABAB;
}

.form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
    color: #017572;
}

.form-signin .form-signin-heading,
.form-signin .checkbox {
    margin-bottom: 10px;
}

.form-signin .checkbox {
    font-weight: normal;
}

.form-signin .form-control {
    position: relative;
    height: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 10px;
    font-size: 16px;
}

.form-signin .form-control:focus {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    border-color:#017572;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-color:#017572;
}

h2{
    text-align: center;
    color: #017572;
}
</style
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration</title>

<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/form-elements.css">
<link rel="stylesheet" href="assets/css/style.css">


<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top content -->
<div class="top-content">
<div class="container">

<div class="row">
<div class="col-sm-6 col-sm-offset-3 text">

<h1><font color="white">Snapkart</font></h1>

<div class="description">

</div>
</div>

<div class="row">
<div class="col-sm-10 col-sm-offset-1 show-forms">
<span class="show-register-form active">Model-Register</span> 
<span class="show-forms-divider">/</span>

<span class="show-login-form"><a href="login.php">Login</a></span>
</div>
</div>

<div class="row register-form">
<div class="col-sm-4 col-sm-offset-1">
<form role="form" action="#" method="post">
<div class="r-form">
<div>
<a class="btn btn-link" href="adagency.php" color="white">Are You Ad-Agency...??</a>
</div>
<div class="form-group">
<label class="sr-only" for="r-form-first-name">mname</label>
<input type="text" name="mname" placeholder="Model name" class="r-form-mname form-control" id="r-form-mname" required>
</div>
<div class="form-group">
<label class="sr-only" for="r-form-last-name">address</label>
<textarea name="add" placeholder="Address" class="r-form-address form-control" id="r-form-address"></textarea>
</div>
<div class="form-group">
<label class="sr-only" for="r-form-first-name">city</label>
<input type="text" name="city" placeholder="City" class="r-form-city form-control" id="r-form-city">
</div>
<div class="form-group">
<label class="sr-only" for="r-form-first-name">pincode</label>
<input type="text" name="pincode" placeholder="Pincode..." class="r-form-first-name form-control" id="r-form-first-name">
</div>
<div class="form-group">
<label class="sr-only" for="r-form-first-name">gender</label>
<input type="text" name="gender" placeholder="Gender...m/f" class="r-form-first-name form-control" id="r-form-first-name" required>
</div>
<div class="form-group">
<label class="sr-only" for="r-form-email">Email</label>
<input type="email" name="memail" placeholder="Email..." class="r-form-email form-control" id="r-form-email" required>
</div>
<div class="form-group">
<label class="sr-only" for="r-form-about-yourself">contactno</label>
<input type="text" name="cno" placeholder="Contact No..." 
class="r-form-about-contactno form-control" id="r-form-about-yourself">
</div>
<div class="form-group">
<label class="sr-only" for="l-form-password">Password</label>
<input type="password" name="password" placeholder="Password..." class="l-form-password form-control" id="l-form-password" required>
</div>
<div class="form-group"  data-sitekey="6Le151QUAAAAAL5rzaHwXTDuC4OkIxdOcyThR_dk"></div>
<button type="submit" class="btn" name="signup">Sign me up!</button>
</form>
</div>
</div>
<?php
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "snapkart";
if(isset($_GET['logout']))
{
    session_destroy();
}
if (isset($_POST['signup']))
{    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if(!$conn)
    {
        console_log("123");
        die("<b>connection failed.....<br><br>");
    }
    $mname=$_POST['mname'];
    $address=$_POST['add'];
    $cit=$_POST['city'];
    $pin=$_POST['pincode'];
    $gen=$_POST['gender'];
    $mmemail=$_POST['memail'];
    $contact=$_POST['cno'];
    $pass=$_POST['password'];
	$check_email_query="select * from models WHERE email='$mmemail'";
    $run_query=mysqli_query($conn,$check_email_query);
    //console_log( $contact);
    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $mmemail is already exist in our database, Please try another one!')</script>";
header("registration.php");
}
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$contact))
{
    echo "<script>alert('Contact $contact is invalid, Please try again! ')</script>";
    header("registration.php");
}
if(!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/',$mmemail))
{
    echo "<script>alert('email $mmemail is invalid, Please try again! ')</script>";
    header("registration.php");
}
      else
{
$sql="INSERT INTO `models`(`mname`, `address`, `city`, `pincode`, `gender`, `email`, `contactno`, `password`) VALUES ('$mname','$address','$cit','$pin','$gen','$mmemail','$contact','$pass')";
//console_log($sql);
if ($conn->query($sql) === TRUE) {
    header("Location:login.php");
}
}
}
else{
    console_log("123");
}
?>			
</div> <!-- /container -->

<div class="row login-form">
<div class="col-sm-4 col-sm-offset-1">

<form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
<div class="l-form">
</div>
</div>
</div>
</div>
</div>
</div>
</div>				
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>
</body>
</html>