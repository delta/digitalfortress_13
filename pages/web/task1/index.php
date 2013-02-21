<?php
if(isset($_REQUEST['submit'])){
	$connection = mysql_connect("server","user","password");
	mysql_select_db($database_name);
	
	$usr = $_GET['user'];
	$pass = $_GET['password'];
	$query = "SELECT * FROM `task1` WHERE `user`={$user} AND `password`={$pass} LIMIT 1 ";
	$result = mysql_query($query);
	if(mysql_affected_rows($result)){
		$ans = 'level ans';
	}
}
?>

<html>
	<head>
		<title>Welcome to the CTF!</title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<?php require_once "header.php";?>
		<div id="contents">
			<center>Web-task-1</center>
			<div id="question">Question question question question question question question question question question question
				 question question question question question question question question question question question question question
				  question question question question question question question question question question question question question
				   question question question question question question question question question question question question
		   </div>
			<div align="center">	
			<form method="get" action="">
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
			
			<div align="center">
				<?php
					if(isset($_REQUEST['submit'])){
						if(isset($ans))echo "The key for this level is : ".$ans;
					} else {
						echo "Wrong answer";
					}
				?>
			</div>
			</div>
		</div>
	</body>
</html>
