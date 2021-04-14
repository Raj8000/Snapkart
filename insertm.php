<?php
if(isset($_POST['mimg']))
{
		error_reporting(E_ALL^E_NOTICE);
		//echo "<pre>";
		//print_r($_FILES);
//time stamp
$fname=rand(1000,10000)."-".$_FILES['fn']['name'];
$ftype=$_FILES['fn']['type'];
$fsize=$_FILES['fn']['size'];
$moid=$_SESSION['mmid'];



	if($fsize < 10000000)
	{

		if($ftype=="image/jpeg" || $ftype=="image/png")
			{	
				 $conn=mysqli_connect("localhost","root",""); 
					if(!$conn)
					{
						die("<b>connection failed.....<br><br>");
					}
					//echo "connection successfully......<br><br>";
				$db=mysqli_select_db($conn,"snapkart");
				
				
				
				move_uploaded_file($_FILES['fn']['tmp_name'],"modelprofile/".$fname);
				session_start(); 
				$mmid=$_SESSION['mmid'];
				$a="modelprofile/".$fname;
				echo $a;
				$dd=$_POST['c'];
				//echo $dd;
				// put code to insert record in model photo table
				$sql="UPDATE `models` SET `mimg`='$a' WHERE `mid`='$mmid'";
				//var_dump($sql);
				$res=mysqli_query($conn,$sql);
				
			
				header("Location: mprofile.php");
				unset($_FILES);
				

			}
		else
			{
				echo "file must be jpg or png";
			}

	}
	else
	{
		echo "file must be less then 1 mb";
	}
}

?>