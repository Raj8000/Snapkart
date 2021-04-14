<?php


$conn=mysqli_connect("localhost","root","");
if(!$conn)
					{
						die("<b>connection failed.....<br><br>");
					}

mysqli_select_db($conn,"snapkart");

?>