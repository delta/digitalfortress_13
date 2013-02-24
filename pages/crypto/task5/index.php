<?php

	$rail=array();
	$railno=4;
	$flag=1;
	
	if(isset($_REQUEST['submit'])){
		$string = strtoupper($_REQUEST['pass']);
		$x=0;
		
		for($i=0;$i<strlen($string);$i++){
			$rail[]=array();
			for($j=0;$j<$railno;$j++)
				if($j==$x)$rail[$i][$j]=$string[$i];
				else $rail[$i][$j]='$';
			if($x==$railno-1 && $flag)$flag=0;
			else if($x==0 && $flag==0)$flag=1;
			if($flag)$x++;
			else $x--;
		}
		$string1 = "";
		for($j=0;$j<$railno;$j++){
			$string1.=" ";
			for($i=0;$i<strlen($string);$i++){
				if($rail[$i][$j]!="$")
				$string1 .= $rail[$i][$j];
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
			<center>Crypto-task-5</center>
			<div id="question">
			<pre>
<font size=4 >
Derpina	: I know you found out my previous password.You are awesome,but my current encryption is too.
Derp	: Challenge Accepted.
Derpina	: I never challenged you, but anyways can you do this ? Quit when you can.
Derp	: I said Challenge Accepted so it will be accomplished.
Derpina	: I will even give you my encrypted string.Yeah,you heard it right no need to hack my database
          this time. It is "<b>IAKO FCNCTYU YUCAHSWN ORII</b>" and I used rail fence for it.
          You keep talking. I had a big day today at the shop, I'm off to sleep
			</pre>
		      </p>
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
				if(isset($string1) && !empty($string1))echo "<div align='center'>The encrypted string  is :  ".$string1."</div>";
			?>
		</div>
	</body>
</html>
