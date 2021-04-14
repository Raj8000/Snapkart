<?php
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
if(isset($_POST['delet']))
{
	$chk=$_POST['chk'];
	for($i=0;$i<count($chk);$i++)
	{

$a=$chk[$i];
console_log($a);
$conn=mysqli_connect("localhost","root",""); 


mysqli_select_db($conn,"snapkart");
$sql="DELETE FROM `photocatagory` WHERE `catagoryid`='".$a."'";

$res=mysqli_query($conn,$sql);

echo "$a is Deleted.";
}
}
?>