<?php
if(isset($_REQUEST['submit'])){
  include "requir/config.php";
	include "configs.php";
	$connection = mysql_connect($host,$task4user,$task4password) or die(mysql_error());
	mysql_select_db($db) or die(mysql_error());
	$user1 = mysql_real_escape_string($_REQUEST['user']);
	$pass1 = mysql_real_escape_string($_REQUEST['password']);
	$query = "SELECT * FROM `task4` WHERE `user`='$user1' AND `password`='$pass1' LIMIT 1";
	$result = mysql_query($query) or die(mysql_error());
	$row=mysql_fetch_assoc($result);
	if(mysql_num_rows($result)){
		echo "hey";
	       $_SESSION["cookie"]=array();
	       setcookie("username",$user1);	
	       $_SESSION["cookie"]['username']=$user1;
	       setcookie("password",$pass1);	
	       $_SESSION["cookie"]['password']=$pass1;
	       setcookie("manager",$admin);
		   $_SESSION["cookie"]["manager"]=$row['manager'];	
		   $_SESSION['task4loggedin']=1;
		   print_r($_SESSION);
	}

			$host  = $_SERVER['HTTP_HOST'];
			
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                	//header("Location:http://".$host.$uri);
                	header("Location:http://".$host."/web/task4/");
}
?>
