<?php
	
					
					
//echo $m;
$conn=mysqli_connect("localhost","root",""); 
if(!$conn)
{
	die("<b>connection faild.....<br><br>");
}
//echo "connection successfully......<br><br>";

mysqli_select_db($conn,"snapkart");
if (isset($_GET['aedit']))
				{
					
					$aid=$_GET['aid'];
					$aname=$_GET['aname'];
					$add=$_GET['add'];
					$city=$_GET['city'];
					$pin=$_GET['pin'];
					$contact=$_GET['cno'];
					$email=$_GET['email'];
					$web=$_GET['web'];
					$pass=$_GET['pass'];
$sql="UPDATE `adagency` SET `aid`='$aid',`aname`='$aname',`address`='$add',`city`='$city',`pincode`='$pin',`contectno`='$contact',`email`='$email',`website`='$web',`password`='$pass' WHERE `aid`='$aid'";

$res=mysqli_query($conn,$sql);
				}
header("Location:madagency.php");


?>