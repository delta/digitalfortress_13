<?php
  if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])){

?>
		<img src="/images/manage.php.jpg" width="100" height="100">
		<form method="post" action="">
			Username : <input type="text" name="get_user" /><br/>
			<input type="submit" name="submit" value="submit"/>
		</form>

<?php
    if(isset($_REQUEST["submit"])){
    include "config.php";
        $cond = $_REQUEST['get_user'];
if($cond == "'"){
   echo "Error Getting Username Information From Table 'users' ";
}
 	$query = "SELECT `USER`,`COMPANY` FROM `task4` WHERE `USER`='$cond'";
	$result = mysql_query($query);
        while($data = mysql_fetch_assoc($result)){
              echo $data['USER']." : ".$data['COMPANY']."<br/>";
	}
   }
}
else{
    			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			header("Location:http://".$host.$uri);
}
?>
