<?php
if(isset($_REQUEST['submit'])){
   include "config.php" ;
   
   	$user = mysql_real_escape_string($_REQUEST['user']);
	$pass = mysql_real_escape_string($_REQUEST['password']);
	$desc = mysql_real_escape_string($_REQUEST['company']);

	$query = "SELECT * FROM `task4` WHERE `USER`='$user' AND `PASSWORD`='$pass' AND `COMPANY`='$desc'";
        $result = mysql_query($query);
        if(!mysql_num_rows($result)){
		$query1 = "INSERT INTO `task4` (USER,PASSWORD,COMPANY) VALUES ('$user','$pass','$desc')";
        	$result1 = mysql_query($query1);

      		if($result1){
			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			header("Location:http://".$host.$uri);
      		}
	}
       else{ 
            echo "USer data already exists";
       }

}
 ?>
<html>
   <head>
      <center>REGister HEre!</center>
   </head>
      <body>
		<form method="post" action="">
			Username : <input type="text" name="user" /><br/>
			Password : <input type="password" name="password" /><br/>
			Company : <input type="text" name="company" /><br/>
			<input type="submit" name="submit" value="submit"/>
		</form>
   	</body>
</html>
