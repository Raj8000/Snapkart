<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SK Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
			<?php
include("sidebar.php");
?>
			     </nav>
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit/Update Models</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="panel-body">
						<div class="panel-body">
						<div class="row">
                                
                                    <div class="table-responsive">
									
                           <table border="1" class="table table-bordered table-hover table-striped">
						   
						   <tr>
						  
				</div>
				</div>
					</div>
					</div>
						   
						   
						   
						   
                        </div>
					
			<?php
$m=$_GET['modelid'];

$conn=mysqli_connect("localhost","root",""); 
if(!$conn)
{
	die("<b>connection faild.....<br><br>");
}
//echo "connection successfully......<br><br>";

mysqli_select_db($conn,"snapkart");
$sql="SELECT * FROM `models` WHERE `mid`='$m'";

$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
echo 
	"<form action='medit.php?modelid=' method='get'>
            <div class='row'>
			<div class='panel-body'>
						<div class='panel-body'>
						<div class='row'>
                                
                                    <div class='table-responsive'>
							<h3>Update Model's Details..</h3>
                           <table border='1' class='table table-bordered table-hover table-striped'>
						   <tr>
						   <tr>
						   <td></td>
						   <td><input type='text' hidden name='mmid' value=".$row["mid"]."></td>
						   </tr>
						   <tr>
						   <td>Model Name</td>
						   <td><input type='text' name='mmname' value=".$row["mname"]."></td>
						   </tr>
						   <tr>
						   <td>Address</td>
						   <td><input type='text' name='adde' value=".$row["address"]."></td>
						   </tr>
						   <tr>
						   <td>City</td>
						   <td><input type='text' name='cityy' value=".$row["city"]."></td>
						   </tr>
						   <tr>
						   <td>Pincode</td>
						   <td><input type='text' name='pinn' value=".$row["pincode"]."></td>
						   </tr>
						   <tr>
						   <td>Gender</td>
						   <td><input type='text' name='genderr' value=".$row["gender"]."></td>
						   </tr>
						   <tr>
						   <td>Email</td>
						   <td><input type='text' name='emaill' value=".$row["email"]."></td>
						   </tr>
						   <tr>
						   <td>Contect No</td>
						   <td><input type='text' name='cnoo' value=".$row["contactno"]."></td>
						   </tr>
						   <tr>
						   <td>Password</td>
						   <td><input type='text' name='passs' value=".$row["password"]."></td>
						   </tr>
						   <tr>
						   <td>
						   <div class='btn-group'>
						   <td>
						   <button name='medit' class='btn btn-warning'>Submit</a>
						   
						   </td>
						   </tr>
						   </table>
						   
							</div>
							</form>
			
						   ";
  
}


?>


            <!-- /.row -->
          
            <!-- /.row -->
			</table>
			
	
