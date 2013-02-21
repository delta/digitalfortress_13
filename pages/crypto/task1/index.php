<?php
if(isset($_REQUEST['submit'])){
	$string = $_REQUEST['pass'];
	for($i=0;$i<strlen($string);$i++){
		if($i&1){
			$string[$i]=chr(ord($string[$i])+$i);
		} else {
			$string[$i]=chr(ord($string[$i])-$i);
		}
	}
}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<?php require_once "header.php";?>
		<div id="content">
			<center>Crypto-task-1</center>
			<div id="question">
				<p>You seem to have found the encrypted password of derp and that was encrypted using his own algorithm.
					You have access to the machine that encrypts the password</p>
				<p>Derp's encrypted password is "asdfasdfafsdf"(quotes for clarity). His password is the answer for this level</p>
			</div> 
			<div align="center">
				<form method="get" action="">
					<table>
						<tr>
							<td><input type="text" name="pass" /></td>
							<td><input type="submit" name="submit" value="submit"/></td>
						</tr>
					</table>
				</form>
			</div>
			
			<?php
				if(isset($string) && !empty($string))echo "<div align='center'>The encrypted string is :  ".$string."</div>";
			?>
		
		</div>
		
	</body>
</html>
