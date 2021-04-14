<?php
		
			
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password']))
			{
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'admin')
			   {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
				  
                  $msg='Welcome '.$_POST['username'];
				  header("Location:localhost:8011\SNAPKART\admin\index.php?id=$msg");
               }
			   
			   
			 
            
			
			
			elseif (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password']))
			{
			   $conn=mysqli_connect("localhost","root",""); 
				if(!$conn)
				{
					die("<b>connection faild.....<br><br>");
				}
				echo "connection successfully......<br><br>";
			$uname=$_POST['username'];
			$pass=$_POST['password'];
			mysqli_select_db($conn,"snapkart");
			$sql="SELECT `mname`,`password` FROM `models` WHERE `mname`=$uname and `password`=$pass";
			
			
			$res=mysqli_query($conn,$sql);
			
			var_dump($res);
              
			   $row=mysqli_fetch_assoc($res);
			   var_dump($row);
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = '$uname';
                  
				  
                  $msg='Welcome '.$_POST['username'];
				  header("Location:localhost:8011\SNAPKART\home.php?id=$msg");
               
			 }  
			   
			   else
				{
                  $msg = 'Wrong username or password';
				 
                }
            
			}
         ?>