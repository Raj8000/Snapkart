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
                    	<span class="show-register-form active">Register</span> 
						<span class="show-forms-divider">/</span> 
                    	<span class="show-login-form">Login</span>
                    </div>
                </div>
                
                <div class="row register-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" action="login.php" method="get">
						<div class="r-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="r-form-first-name">First name</label>
	                        	<input type="text" name="fname" placeholder="First name..." class="r-form-first-name form-control" id="r-form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Last name</label>
	                        	<input type="text" name="lname" placeholder="Last name..." class="r-form-last-name form-control" id="r-form-last-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="r-form-email form-control" id="r-form-email">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-about-yourself">About yourself</label>
	                        	<textarea name="about" placeholder="About yourself..." 
	                        				class="r-form-about-yourself form-control" id="r-form-about-yourself"></textarea>
	                        </div>
				            <button type="submit" class="btn">Sign me up!</button>
						</form>
						
                    </div>
                   
						</div>
                    </div>
					
                
                
                 
      
         
         <?php
		
			
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password']))
			{
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'admin')
			   {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
				  
                  $msg='Welcome '.$_POST['username'];
				  header("Location:http:\SNAPKART\admin\index.php?id=$msg");
               }
			   
			   
			 
            
			
			
			elseif (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password']))
			{
			   $conn=mysqli_connect("localhost","root",""); 
				if(!$conn)
				{
					die("<b>connection faild.....<br><br>");
				}
				echo "connection successfully......<br><br>";

			
			mysqli_select_db($conn,"snapkart");
			  session_start();
			  
			if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT `mname`,`password` FROM models WHERE mname = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
					$msg='Welcome '.$_POST['username'];
				    header("Location:http:\SNAPKART\home.php?id=$msg");
      }
	  else 
	  {
         $error = "Your Login Name or Password is invalid";
      }
   }
         ?>
      </div> <!-- /container -->
	  
      
		<div class="row login-form">
        <div class="col-sm-4 col-sm-offset-1">
	
		<form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
 	<div class="l-form">
	    
		
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
							<div class="form-group">
	                    		<label class="sr-only" for="l-form-username">Username</label>
	                        	<input type="text" name="username" placeholder="Username..." class="l-form-username form-control" id="l-form-username" required autofocus>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="l-form-password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="l-form-password form-control" id="l-form-password" required>
	                        </div>
		</div>
	
			   
			   
            
            <button class = "btn" type = "submit" 
               name = "login">Login</button>
         </form>
		<div class="social-login">
                        	<p>Or login with:</p>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
	                        	<a class="btn btn-link-1" href="http://twitter.com"><i class="fa fa-twitter"></i></a>
	                        	<a class="btn btn-link-1" href="http://www.google-plus.com"><i class="fa fa-google-plus"></i></a>
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