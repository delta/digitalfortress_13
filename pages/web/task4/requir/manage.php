<?php
if(isset($_COOKIE["manager"]) && $_COOKIE["manager"] == 1){
   if($_COOKIE["username"] == "POKKA_DELTA"){
      if(isset($_REQUEST['add'])){
  	 if($_REQUEST['user'] == "paramesh"){
   		include "config.php";
   		$user = mysql_real_escape_string($_REQUEST['user']);
      		$query1 = "INSERT INTO `task4.1` (USER) VALUES ('$user')";
        	$result1 = mysql_query($query1);
			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			header("Location:http://".$host.$uri);
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

