<?php session_start(); 
		   if(!isset($_SESSION['username']))
		     header("Location:http:\SNAPKART\login.php");
			   ?>
			   <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.iki-bir.com/Snapkart/portfolio5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2016 15:14:19 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>Snapkart</title>
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
  <div class="dark-wrapper">
    <div class="container inner2">
     

	  <?php

				
				$id=$_SESSION['mmid'];
				$mmid=$_SESSION['username'];
				
				
				$conn=mysqli_connect("localhost","root",""); 
					if(!$conn)
					{
						die("<b>connection failed.....<br><br>");
					}
					//echo "connection successfully......<br><br>";
				$db=mysqli_select_db($conn,"snapkart");
			
				//$sql="SELECT * FROM `photos` WHERE `catagoryid`='entertainment'";
				$a="SELECT `catagoryid`,`catimg` FROM `photocatagory`";
				$b="SELECT * FROM `photocatagory`";
				$c="SELECT * from `models` WHERE `mid`='$id'";
		//var_dump($sql);
		//$res=mysqli_query($conn,$sql);
		$ros=mysqli_query($conn,$a);
		$res=mysqli_query($conn,$b);
		$rws=mysqli_query($conn,$c);
		//var_dump($res);
		
			echo "<h3 class='section-title text-center'>".$mmid."'s Profile</h3>";
		
		while($rrw=mysqli_fetch_assoc($res))
				{			
					$cat= $rrw["catagoryid"];
				}
					//	$_SESSION['cat']= $cat; 
					//$mid=$_POST[$row["mid"]];
		
			
				
					

	  
	while($rsw=mysqli_fetch_assoc($rws))
				{			
					echo "
		<div class='col-sm-6'>
		
         <div class='caption-overlay'>
		<a href='#'><img src='".$rsw["mimg"]."' alt=''width='600px' height='300px'/></a>
            <div class='caption bottom-right'>
              
              <!--/.title--><span class='main-title layer'>$mmid</span>
            </div>
            <!--/.caption-->  </div>
			
         
        </div>
				</br></br></br>
				<h3 class='section-title text-left'>Upload Profile Photo</h3>
				
				<p class='text-left'></p>
				<form action='insertm.php' method='post' enctype='multipart/form-data'>
				<div align='left' class='fileupload fileupload-new' data-provides='fileupload'>
	
				<span class='btn btn-primary btn-file'><span  class='fileupload-new'>Select Photo</span>
				<span class='fileupload-exists'></span> <input type='file' name='fn' /></span>
				<span class='fileupload-preview'><input type='submit' name='mimg'value='UPLOAD'></span>
				</div></br></br></br></br>
				</form>
				";}
				?>
   
      <!-- slide-portfolio --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.dark-wrapper -->
  
 <?php include 'include/footer.php';?>
  <div class="slide-portfolio-overlay"></div><!-- overlay that appears when slide portfolio content is open -->
</main>
<!--/.body-wrapper -->

<!-- slide-portfolio-item-content --> 
<a href="#0" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a> <!-- close slide portfolio content --> 
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/plugins.js"></script> 
<script src="style/js/classie.js"></script> 
<script src="style/js/jquery.themepunch.tools.min.js"></script> 
<script src="style/js/scripts.js"></script>
<!-- DEMO ONLY -->
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/aqua.css" title="Snapkartaqua-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/blue.css" title="Snapkartblue-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/brown.css" title="Snapkartbrown-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/forest.css" title="Snapkartforest-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/green.css" title="Snapkartgreen-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/lime.css" title="Snapkartlime-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/orange.css" title="Snapkartorange-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/pink.css" title="Snapkartpink-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/purple.css" title="Snapkartpurple-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/red.css" title="Snapkartred-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/rose.css" title="Snapkartrose-color" media="screen" />
<script type="text/javascript" src="switcher/switchstylesheet.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
	$(".changecolor").switchstylesheet( { seperator:"color"} );
});
</script>
</body>

<!-- Mirrored from themes.iki-bir.com/Snapkart/portfolio5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2016 15:14:19 GMT -->
</html>