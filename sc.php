<?php session_start(); 
		   if(!isset($_SESSION['username']))
		   {header("Location:http:\adagency.php");}
			   ?>
	   <!DOCTYPE html>
<html lang="en">
 <?php include 'include/dmouse.php';?>
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
 <?php include 'include/navad.php';?>
  <div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">
      <h3 class="section-title text-center">photo category</h3>
      <p class="text-center">All Photo Catagories</p>

	  <?php

				
				//$mmid=$_SESSION['mmid'];
				$conn=mysqli_connect("localhost","root",""); 
					if(!$conn)
					{
						die("<b>connection failed.....<br><br>");
					}
					//echo "connection successfully......<br><br>";
				$db=mysqli_select_db($conn,"snapkart");
			
				//$sql="SELECT * FROM `photos` WHERE `catagoryid`='entertainment'";
				$a="SELECT * FROM `photocatagory`";
				//$b="SELECT * FROM `photocatagory`";
				
		//var_dump($sql);
		//$res=mysqli_query($conn,$sql);
		$ros=mysqli_query($conn,$a);
		//$res=mysqli_query($conn,$b);
		
		//var_dump($res);
		
					//	$_SESSION['cat']= $cat; 
					//$mid=$_POST[$row["mid"]];
				
					
while($row=mysqli_fetch_assoc($ros))

	{
		$r=$row['catagoryid'];
	/*	echo"<div class='col-sm-4'>
         <div class='caption-overlay'>
		<img src='".$row["filepath"]."' alt='' width='100px' height='100px' />
            <div class='caption bottom-right'>
              <div class='title'>
                <h3 class='main-title layer'>".$row["catagoryid"]."</h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
          </div>
        </div>";*/
		echo"<div class='col-sm-4'>
         <div class='caption-overlay'>
		<a href='acat.php?cat=$r' name='cat'><img src='".$row["catimg"]."' alt='' width='350px' height='200px' /></a> 
            <div class='caption bottom-right'>
              <div class='title'>
                <h3 class='main-title layer'>".$row["catagoryid"]."</h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
			</br></br>
          </div>
        </div>";
		
		
					}
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