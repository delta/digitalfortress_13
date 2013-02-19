<?php
if(isset($_REQUEST['submit'])){
	if(isset($_REQUEST['ans'])){
		$ans = stripslashes($_REQUEST['ans']);
		if(md5($ans)==="md5ans"){
			$ans = "level password";
		}
	}
}
?>
<html>
	<head>
		<title>title</title>
	</head>
	<body>
		<center>title</center>
		Question for this round
		<form method="get" action="">
			<input type="text" name="ans" />
			<input type="submit" name="submit" value="submit" />
		</form>
		<?php
			if(isset($_REQUEST['ans'])){
				echo $ans;
			} else if(!isset($_REQUEST['ans'])){
				echo "wrong ans";
			}
		?>
	</body>
</html>