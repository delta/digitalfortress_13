<?php
if(isset($_REQUEST['submit'])){
	include "configs.php";
	
	$connection = mysql_connect($host,$dummyuser,$dummypassword) or die(mysql_error());
	mysql_select_db($db) or die(mysql_error());
	
	$usr = ($_GET['user']);
	$pass = ($_GET['password']);
	$query = "SELECT * FROM `task1` WHERE `user` = '{$usr}'  AND `password` = '".($pass)."' LIMIT 1 ";
	
	
	$result = mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($result)){
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
			<div id="question">Derp is new to PHP & SQL.Derpina his niece is setting up a new site for her flower shop with a poor web developer 
				instead of asking Derp.So naturally, he is angry and wants to hack into her website and see what is inside her site.Your task is to 
				help Derp break into her site. 
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
					if(isset($_REQUEST['submit']) && isset($ans)){
						echo "The key for this level is : ".$ans;
					} else if(isset($_REQUEST['submit']) && !isset($ans)){
						echo "Wrong answer";
					}
				?>
			</div>
			</div>
		</div>
	</body>
</html>
