<?php
if (isset($_REQUEST['submit'])) {
	$string = $_REQUEST['pass'];
	$key = "thisisadumbassquestion";
	$len = strlen($key);
	$res = array();
	for ($i = 0; $i < strlen($string); $i++) {
		$res[] = (ord($string[$i]) ^ ord($key[$i % $len]));
	}
	$string = "";
	foreach ($res as $val) {
		$string .= " " . $val;
	}
}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<?php
		require_once "header.php";
	?>
<div id="content">
	<center>
		Crypto-task-2
	</center>
	<div id="question">
		<p>
			DERP now has changed the encryption algorithm and it uses onetime pad encryption to encrypt the password.
			You have found the encrypted password. You have access to the machine that encrypts the password
		</p>
		<p>
			Derps encrypted password is "andanoobpassword"(quotes for clarity). The key concatenated with the password is the answer for this level
		</p>
	</div>
	<div align="center">
		<form method="get" action="">
			<table>
				<tr>
					<td>
					<input type="text" name="pass" />
					</td>
					<td>
					<input type="submit" name="submit" value="submit"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php
	if (isset($string) && !empty($string))
		echo "<div align='center'>The encrypted string(ascii value) is :  " . $string . "</div>";
	?>
</div>
</body>
</html>
