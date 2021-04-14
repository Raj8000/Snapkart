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
	<?php session_start(); 
    echo "Welcome ".$_SESSION['username'];
    ?>
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
            <!-- /.navbar-top-links -->

          <?php include 'sidebar.php';?>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Delete Multiple Categories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          
            <!-- /.row -->
            <div class="row">
                
                  
                    <!-- /.panel -->
                    
<?php $conn=mysqli_connect("localhost","root",""); 
if(!$conn)
{
	die("<b>connection faild.....<br><br>");
}
//echo "connection successfully......<br><br>";

mysqli_select_db($conn,"snapkart");
$sql="SELECT * FROM `photocatagory`";

$res=mysqli_query($conn,$sql);
?>
<div class="panel-body">
						<div class="panel-body">
						<div class="row">
                                
                                    <div class="table-responsive">
                           <table border="1" class="table table-bordered table-hover table-striped">
						   <tr>
						   <td>Catagory Name:</td>
						   <td>Catagory Dis:</td>
						   <td>Catagory Img:</td>
						   <td>Edit</td>
                           <td>CheckBoxes</td>
                           <td>Delete</td>
						   </tr>
						   
						   <tr>
						   
                        </div>
      
      <form action='deletem.php' method='post'>                  <!-- /.panel-body -->
  <?php
  function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
    while($row=mysqli_fetch_array($res))  
    {

  echo "<tr><tr><td>".$row["catagoryid"]."<td>".$row["catagoryname"]."<td>".$row["catimg"]."<td>"."<div class='btn-group'>
  <a href='editcat.php?cid=" . $row["catagoryid"] . "' button name='edit' class='btn btn-warning'>Edit</a>
    <td>
    
    <input type='checkbox' name='chk[]' value=".$row["catagoryid"].">
    <td>
    <button type='submit' name='delet' class='btn btn-danger'>Block</button>
</div>";
console_log($row["catagoryid"]);
    } 

?>
	</table>	
    </form>
			
                        <!-- /.panel-heading -->
                       
                    <!-- /.panel -->
                  
                <!-- /.col-lg-8 -->
               
            <!-- /.row -->
        </div>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
