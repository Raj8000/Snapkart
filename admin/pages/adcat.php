<?php
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
if(isset($_POST['submt']))
{
$fname=rand(1000,10000)."-".$_FILES['cimg']['name'];
$ftype=$_FILES['cimg']['type'];
$fsize=$_FILES['cimg']['size'];
	if($fsize < 10000000)
	{
		if($ftype=="image/jpeg" || $ftype=="image/png")
			{	
				 $conn=mysqli_connect("localhost","root",""); 
					if(!$conn)
					{
						die("<b>connection failed.....<br><br>");
					}
				console_log("123");
				 $conn=mysqli_connect("localhost","root",""); 
				mysqli_select_db($conn,"snapkart");
				move_uploaded_file($_FILES['cimg']['tmp_name'],"D:/SNAPKART/catphotos/".$fname);
					$cname=$_POST['cid'];
					$cdis=$_POST['cd'];
					$cimg="catphotos/".$fname;
					
$sql="INSERT INTO `photocatagory`(`catagoryid`, `catagoryname`, `catimg`) VALUES ('$cname','$cdis','$cimg')";

$res=mysqli_query($conn,$sql);
echo $res;
			unset($_FILES);
				}
			}
		}			
echo "User Updated....";
include("AddCat.php");
?>