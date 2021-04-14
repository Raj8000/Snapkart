<?php
session_start();
if(!session_is_registered(uname)){
header("location:http://localhost/SNAPKART/index.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>