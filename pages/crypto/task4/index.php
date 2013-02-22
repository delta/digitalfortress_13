<?php
	$vigenere=array();
	$x=0;
	
	for($i=0;$i<26;$i++,$x++){
		$vigenere[]=array();
		for($j=0;$j<26;$j++)$vigenere[$i][]=chr(65+($x+$j)%26);
	}
	
	if(isset($_REQUEST['submit'])){
		$string = strtoupper($_REQUEST['pass']);
		$keystring = "FLOWER";
		$ans="ifderpcancrackthisheisawesome";
		$key=array();
		
		for($i=0;$i<strlen($string);$i++)$key[]=$keystring[$i%6];
		
		$len = strlen($keystring);
		$res = array();
		
		for($i=0;$i<strlen($string);$i++){
			$res[] = $vigenere[(ord($string[$i])-ord('A'))%26][(ord($key[$i])-ord('A'))%26];
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
			<center>Crypto-task-4</center>
			<div id="question">
				<font size=5 ><p>Derpina is aware that Derp is trying to find out her passwords.So she searched for a better encryption for storing her "flower" store and came across an encryption developed by  Leon Battista Alberti.<br >
			You have to help Derp in his mission as he is clueless except for the encrypted string  
			"<b>NQRAVGHLBYVRHVHDMJMPWOENJDCII</b>" (quotes for clarity).      </p>
			</font>
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
