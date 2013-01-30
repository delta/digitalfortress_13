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
	</head>
	<body>
		<center>crypto task1</center>
		<form>
			<input type="text" name="pass"/>
			<input type="submit" name="submit" value="submit"/>
		</form>
		<?php
			if(isset($string) && !empty($string))echo "The encrypted string is :  ".$string;
		?>
	</body>
</html>