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
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<div id="maintitle"><a href="/">
			<pre>
                                    __           _                     
 ____  _        _  _          _    / _|         | |                    
|  _ \(_) __ _ (_)| |_  __ _ | |  | |_ ___  _ __| |_ _ __ ___  ___ ___ 
| | \ | |/ _' || || __|/ _' || |  |  _/ _ \| '__| __| '__/ _ \/ __/ __|
| |_/ | | (_| || || |_( (_| || |  | || (_) | |  | |_| | |  __/\__ \__ \
|____/|_|\__. ||_|\___|\__._||_|  |_| \___/|_|   \__|_|  \___||___/___/
          / | |			                                       
         / (| |			                                       
         \____/                                                        

			</pre>                                                                                  
		</a></div>
		<div id="contents">
			<center>Web-task-1</center>
			<div id="question">Question question question question question question question question question question question
				 question question question question question question question question question question question question question
				  question question question question question question question question question question question question question
				   question question question question question question question question question question question question
		   </div>
		
			<form method="get" action="">
				<legend></legend>
				<table>
					<tr>
						<td><label for="user">Username : </label></td>
						<td><input type="text" name="user" /></td>
					</tr>
					<tr>
						<td><label for="user">Password : </label></td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="submit"/></td>
					</tr>
				</table>
			</form>
			
		</div>
	</body>
</html>