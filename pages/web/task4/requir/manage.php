<?php
if(isset($_SESSION["cookie"]) && ($_SESSION['task4loggedin']==1))
{
		  $_SESSION["cookie"]['username']=$_COOKIE['username'];
	       //setcookie("password",$pass1);	
	       $_SESSION["cookie"]['password']=$_COOKIE['password'];
	       //setcookie("manager",$admin);
		   $_SESSION["cookie"]["manager"]=$_COOKIE['manager'];	
		   $_SESSION['task4loggedin']=1;
}
		   if(isset($_SESSION["cookie"]) && ($_SESSION['task4loggedin']==1))
{
		   foreach($_SESSION['cookie'] as $key=>$value)
		   setcookie("$key",$value);
		   if($key=='username')$tempusername=$value;
		   /*
	       setcookie("username",$_SESSION["cookie"]['username']);
	       setcookie("password",$_SESSION["cookie"]['password']);
	       setcookie("manager",$_SESSION["cookie"]["manager"]);
		    */
}

if(isset($_COOKIE["manager"]) && $_COOKIE["manager"] == 1){
   if($_COOKIE["username"] == "VIGNESH_DELTA"){
      if(isset($_REQUEST['add'])){
  	 if($_REQUEST['user'] == "paramesh"){
   		include "config.php";
   		$user = mysql_real_escape_string($_REQUEST['user']);
      		$query1 = "INSERT INTO `task4.1` (USER) VALUES ('$user')";
        	$result1 = mysql_query($query1);
			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$_SESSION['part1']=1;
			header("Location:http://".$host."/web/task4");
   }
   else{
  	echo "u need to add user 'paramesh'";
   }
}
?>
  <form action="" method="post">
     Addmembers: <input type="text" name="user" /><br/>
                 <input type="submit" name="add" value="ADD" /><br/>
  </form>
<?php
  }
  else{
     echo "USer not in Managers list";
  }
}
else{
   echo "You need to be a manager to view this page !!";
}
?>     

