<?php
if(isset($_REQUEST['submit'])){
	$string = $_REQUEST['pass'];
	$key = "thisisadumbassquestion";
	$len = strlen($key);
	for($i=0;$i<strlen($string);$i++){
			$string[$i] ^= $key[$i%$len];
	}
}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<center>crypto task2</center>
		<p>DERP now has changed the encryption algorithm and it uses onetime pad encryption to encrypt the password. 
			You have found the encrypted password. You have access to the machine that encrypts the password</p>
		<p>Derps encrypted password is "andanoobpassword"(quotes for clarity). The key concatenated with the password is the answer for this level</p>
		<form>
			<input type="text" name="pass"/>
			<input type="submit" name="submit" value="submit"/>
		</form>
		<?php
			if(isset($string) && !empty($string))echo "The encrypted string is :  ".$string;
		?>
	</body>
</html>