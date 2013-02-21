<?php
if(isset($_REQUEST['submit'])){
	$string = $_REQUEST['pass'];
	for($i=0;$i<strlen($string);$i++){
		if($i&1){
			$string[$i]+=$i;
		} else {
			$string[$i]-=$i;
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
		<center>crypto task1</center>
		<p>You seem to have found the encrypted password of derp and he uses his own encrypting algorithm.
			You have access to the machine that encrypts the password</p>
		<p>Derps encrypted password is "asdfasdfafsdf"(quotes for clarity). His password is the answer for this level</p>
			<form method="get" action="">
				<table>
					<tr>
						<td><input type="text" name="pass" /></td>
						<td><input type="submit" name="submit" value="submit"/></td>
					</tr>
				</table>
			</form>
		<?php
			if(isset($string) && !empty($string))echo "The encrypted string is :  ".$string;
		?>
	</body>
</html>
