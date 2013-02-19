<?php
if(isset($_REQUEST['submit'])){
	$connection = mysql_connect("server","user","password");
	mysql_select_db($database_name);
	
	$query = "SELECT * FROM `task1` WHERE `user`={} AND `password` ";
	$result = mysql_query($query);
	if(mysql_affected_rows($result)){
		
	}
}
?>

<html>
	<head>
		<title>Welcome to the CTF!</title>
	</head>
	<body>
		<center>task1</center>
		<form method="get" action="">
			<input type="text" name="user" />
			<input type="password" name="password" />
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>