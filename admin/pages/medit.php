<?php
	
					
					
//echo $m;
$conn=mysqli_connect("localhost","root",""); 
if(!$conn)
{
	die("<b>connection failed.....<br><br>");
}
//echo "connection successfully......<br><br>";

mysqli_select_db($conn,"snapkart");
if (isset($_GET['medit']))
				{
					
					$mid=$_GET['mmid'];
					$mname=$_GET['mmname'];
					$add=$_GET['adde'];
					$city=$_GET['cityy'];
					$pin=$_GET['pinn'];
					$gender=$_GET['genderr'];
					$email=$_GET['emaill'];
					$contact=$_GET['cnoo'];
					$pass=$_GET['passs'];
$sql="UPDATE `models` SET `mid`='$mid',`mname`='$mname',`address`='$add',`city`='$city',`pincode`='$pin',`gender`='$gender',`email`='$email',`contactno`='$contact',`password`='$pass' WHERE `mid`='$mid'";

$res=mysqli_query($conn,$sql);
				}
header("Location:mmodel.php");


?>