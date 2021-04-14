<?php
	
					
					
//echo $m;
$conn=mysqli_connect("localhost","root",""); 
if(!$conn)
{
	die("<b>connection faild.....<br><br>");
}
//echo "connection successfully......<br><br>";

mysqli_select_db($conn,"snapkart");
if (isset($_GET['codit']))
				{
					
					$cid=$_GET['cid'];
					$cname=$_GET['cname'];
					$add=$_GET['cimg'];
					
$sql="UPDATE `photocatagory` SET `catagoryid`='$cid',`catagoryname`='$cname',`catimg`='$add' WHERE `catagoryid`='$cid'";

$res=mysqli_query($conn,$sql);
				}
echo "User Updated....";


?>