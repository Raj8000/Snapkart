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
        <title>login</title>

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
                    	<span class="show-register-form active">Adagency-Register</span> 
						<span class="show-forms-divider">/</span>
						
                    	<span class="show-login-form"><a href="adlogin.php">Login</a></span>
                    </div>
                </div>
                
                <div class="row register-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" action="#" method="post">
						<div class="r-form">
						<div>
							<a class="btn btn-link" href="registration.php" color="white">Are You Model...??</a>
                        </div>
							<div class="form-group">
	                    		<label class="sr-only" for="r-form-first-name">aname</label>
	                        	<input type="text" name="aname" placeholder="Ad-Agency name..." class="r-form-mname form-control" id="r-form-mname" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-Address">Address</label>
	                        	<textarea name="Address" placeholder="Address..." 
	                        				class="r-form-Address form-control" id="r-form-Address"></textarea>
	                        </div>
							<div class="form-group">
	                    		<label class="sr-only" for="r-form-first-name">city</label>
	                        	<input type="text" name="city" placeholder="City..." class="r-form-city form-control" id="r-form-city">
	                        </div>
							<div class="form-group">
	                    		<label class="sr-only" for="r-form-pincode">pincode</label>
	                        	<input type="text" name="pincode" placeholder="Pincode..." class="r-form-pincode form-control" id="r-form-pincode">
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="r-form-about-yourself">contactno</label>
	                        	<input type="text" name="Cno" placeholder="Contact No..." 
	                        				class="r-form-about-contactno form-control" id="r-form-about-yourself" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="r-form-email form-control" id="r-form-email" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-website">Website</label>
	                        	<input type="text" name="website" placeholder="WebSite..." 
	                        				class="r-form-website form-control" id="r-form-website">
	                        </div>
							 <div class="form-group">
	                        	<label class="sr-only" for="l-form-password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="l-form-password form-control" id="l-form-password" required>
	                        </div>
							
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
				if(isset($_GET['logout']))
				{
					session_destroy();
				}
				if (isset($_POST['signup']))
				{
          console_log("if");
					$conn=mysqli_connect("localhost","root",""); 
					if(!$conn)
					{
						die("<b>connection failed.....<br><br>");
					}
				echo "connection successfully......<br><br>";
					mysqli_select_db($conn,"snapkart");
					console_log("123");
					$aname=$_POST['aname'];
					$add=$_POST['Address'];
					$city=$_POST['city'];
					$pin=$_POST['pincode'];
					$contact=$_POST['Cno'];
					$aemail=$_POST['email'];
					$web=$_POST['website'];
					$pass=$_POST['password'];

          $check_email_query="select * from adagency WHERE email='$aemail'";
    $run_query=mysqli_query($conn,$check_email_query);
					if(mysqli_num_rows($run_query)>0)
    {
      
echo "<script>alert('Email $aemail is already exist in our database, Please try another one!')</script>";
header("adagency.php");
}
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$contact))
{
    echo "<script>alert('Contact $contact is invalid, Please try again! ')</script>";
    header("adagency.php");
}
if(!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/',$aemail))
{
    echo "<script>alert('email $aemail is invalid, Please try again! ')</script>";
    header("adagency.php");
}
else
{
	$sql="INSERT INTO `adagency`(`aname`, `address`, `city`, `pincode`, `contactno`, `email`, `website`, `password`) VALUES ('$aname','$add','$city','$pin','$contact','$aemail','$web','$pass')";
  console_log($sql);
					if ($conn->query($sql) === TRUE) {
    header("Location:http:\adagency.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
else
{
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
        
       

    </body>

</html>