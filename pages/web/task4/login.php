<?php	
if(isset($_REQUEST['submit'])){
  include "requir/config.php";
	$user = mysql_real_escape_string($_REQUEST['user']);
	$pass = mysql_real_escape_string($_REQUEST['password']);
	$query = "SELECT * FROM `task4` WHERE `USER`='$user' AND `PASSWORD`='$pass'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
	       setcookie("username",$user);	
	       setcookie("password",$pass);	
	       setcookie("manager",$admin);	
	}

			$host  = $_SERVER['HTTP_HOST'];
			
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                	header("Location:http://".$host.$uri);
}
?>
