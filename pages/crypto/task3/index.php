<?php

$polybius=array();
$i=0;
$j=0;
$k=0;
$flag=1;
for($i=0;$i<5;$i++)
for($j=$k;$j<5+$k;$j++)
{
if($flag && chr(ord('z')-$i*5-$j)=='i'){
$flag=0;
	$polybius['i']=$i.($j-1);
	$k=1;	
}
else 
$polybius[''.chr(ord('z')-$i*5-$j)]=$i.($j-$k);
}
//$polybius['a']='44';
//print_r($polybius);
if(isset($_REQUEST['submit'])){
	$string = strtolower($_REQUEST['pass']);
	$key = "thisisaverypoorpassword";
	$len = strlen($key);
	$res = array();
	for($i=0;$i<strlen($string);$i++){
		$res[] = $polybius[$string[$i]];
	}
	$string = "";
	foreach($res as $val){
		$string .= $val;
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
			<center>Crypto-task-3</center>
			<div id="question">
				<p>Derpina is too weak at remembering password so she used a weak encryption using only alphabetic characters .<br >
				Derp, the hacker found out Derpina's encrypted password to be "<b>1133321232124504411301202121132045121203211342</b>" (quotes for clarity) and he guesses that Derpina uses polybius encryption.But Derpina is known for doing things in reverse, so help Derp to decrypt her password.      </p>
			</div>
			<div align="center">
				<form method="get" action="">
						<table>
							<tr>
								<td><input type="text" name="pass" value="<?php if(isset($_GET['pass']))echo $_GET['pass']; ?>"/></td>
								<td><input type="submit" name="submit" value="submit"/></td>
							</tr>
						</table>
				</form>
			</div>
			<?php
				if(isset($string) && !empty($string))echo "<div align='center'>The encrypted string  is :  ".$string."</div>";
			?>
		</div>
	</body>
</html>
