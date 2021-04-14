<?php session_start(); 
		   if(!isset($_SESSION['username']))
		   {header("Location:http:\SNAPKART\adagency.php");}
			   ?><!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.iki-bir.com/SNAPKART/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2016 15:15:26 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>SNAPKART</title>
<!-- Bootstrap core CSS -->
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/plugins.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="style/css/color/blue.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="style/type/icons.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<main class="body-wrapper">
   <?php include 'include/navmodel.php';?>
  <div class="offset"></div>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title text-center">get in touch    </h3>
        
        <ul class="contact-info text-center">
          <li><i class="icon-location"></i>Mahesana  </li>
          <li><i class="icon-phone"></i>+91 8000282727</li>
          <li><i class="icon-mail"></i><a href="first.last%40email.com">dragovic768@gmail.com</a> </li>
        </ul>
        <div class="divide50"></div>
        <div class="form-container">
          <form action="http://themes.iki-bir.com/SNAPKART/contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="novalidate">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="text" name="name" placeholder="Your name" required="required">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="email" name="email" placeholder="Your e-mail" required="required">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="tel" name="tel" placeholder="Phone">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
              <div class="col-sm-6">
                <div class="form-field">
                  <label class="custom-select">
                    <select name="department" required="required">
                      <option value="">Model</option>
                      <option value="Sales">Ad-Agency</option>
                     
                    </select>
                    <span><!-- fake select handler --></span> </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column --> 
            </div>
            <!--/.row -->
            <textarea name="message" placeholder="Type your message here..." required="required"></textarea>
           
            <!--/.radio-set -->
            <input type="submit" class="btn" value="Send" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
            <footer class="notification-box"></footer>
          </form>
          <!--/.vanilla-form --> 
        </div>
        <!--/.form-container --> 
      </div>
      <!-- /.thin --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
 

 
  
</main>
<!--/.body-wrapper --> 
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/plugins.js"></script> 
<script src="style/js/classie.js"></script> 
<script src="style/js/jquery.themepunch.tools.min.js"></script> 
<script src="style/js/scripts.js"></script>
<!-- DEMO ONLY -->
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/aqua.css" title="SNAPKARTaqua-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/blue.css" title="SNAPKARTblue-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/brown.css" title="SNAPKARTbrown-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/forest.css" title="SNAPKARTforest-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/green.css" title="SNAPKARTgreen-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/lime.css" title="SNAPKARTlime-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/orange.css" title="SNAPKARTorange-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/pink.css" title="SNAPKARTpink-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/purple.css" title="SNAPKARTpurple-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/red.css" title="SNAPKARTred-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/rose.css" title="SNAPKARTrose-color" media="screen" />
<script type="text/javascript" src="switcher/switchstylesheet.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
	$(".changecolor").switchstylesheet( { seperator:"color"} );
});
</script>
</body>

<!-- Mirrored from themes.iki-bir.com/SNAPKART/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2016 15:15:26 GMT -->
</html>