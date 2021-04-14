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
                    </div>
                </div>
                
                <div class="row register-form">
                    <div class="col-sm-4 col-sm-offset-1">
                        <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="r-form">
<?php
      $conn=mysqli_connect("localhost","root",""); 
        if(!$conn)
        {
          die("<b>connection failed.....<br><br>");
        }
        //echo "connection successfully......<br><br>";

      
        mysqli_select_db($conn,"snapkart");
      
            $msg = '';
            
            

        
      if (isset($_POST['login']) && !empty($_POST['username'])&& !empty($_POST['password']))
      {
         
        $aname=$_POST['username'];
        $pass=$_POST['password'];
        $sql="SELECT * FROM `adagency` WHERE `aname`='$aname' and `password`='$pass'";
  
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res))
        {     
          $aid= $row["aid"];
        }
      
        
        $nr=mysqli_affected_rows($conn);
        $row=mysqli_fetch_assoc($res);
        if($nr==1) 
        {
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = $aname;
          $_SESSION['aaid']= $aid; 
          $r=$mid;
          $msg=$_POST['username'];
          header("Location:http:\adhome.php");  
        }         

        else
        {
                  $msg = 'Wrong username or password';
         
                }        
      }
         ?>
            
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
         <p><a class="btn btn-link" href="adagency.php" color="white">Register</a></p>
         <p><a class="btn btn-link" href="forget.php" color="white">Forgot Password ?</a></p>
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

         </div>
                    </div>              
       
       

       
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
       

    </body>

</html>