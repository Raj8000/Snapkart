<?php
$m=$_GET['modelid'];

$conn=mysqli_connect("localhost","root",""); 
if(!$conn)
{
	die("<b>connection faild.....<br><br>");
}
//echo "connection successfully......<br><br>";

mysqli_select_db($conn,"snapkart");
$sql="DELETE FROM `models` WHERE `mid`='$m'";

$res=mysqli_query($conn,$sql);

echo "$m is Deleted.";


?>