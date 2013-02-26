<?php
//ans is YAHOOQUERYLANGUAGE
if(isset($_REQUEST['submit'])){
	if(isset($_REQUEST['ans'])){
		include "configs.php";
		$ans = strtoupper(stripslashes($_REQUEST['ans']));
		$flag =1;
		if(md5($ans)=="777da8677e2b35077c6143ef78b26335" || md5($ans)=="1a0c1b56e9d617688ee345da4030da3c"){
			$ans = $levelpass[1][0];
		} else {
			$flag = 0;
			$ans = "wrong answer";
		}
	}
}
?>
<html>
	<head>
		<title>Trivia-Task 1</title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<?php require_once "header.php";?>
		<div id="contents">
			<center>Trivia-task-1</center>
			<div id="question">Yahoo->mashup->developer</div><br />
			<div>Note: Answers consists only of uppercase letters and do not contain special characters or white spaces..</div>
			
			<?php
				if(isset($_REQUEST['ans']) && $flag){
					echo "<br/><br/><div align='center' style='padding:10px;'>LEVEL PASSWORD: ".$ans."</div>";
				} else if(!isset($_REQUEST['ans']) || !$flag){
					if(isset($_REQUEST['ans']))echo "<div align='center' class='center' style='padding-top:20px;'>Wrong ans</div>";
					?>
			<div align="center">
				<form action="" method="get" enctype="multipart/form-data">
					<table>
						<tr>
							<td><label for="ans">Your answer : </label></td>
							<td><input type="text" name="ans" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="submit" /></td>
						</tr>
					</table>
				</form>
			</div>
			<?php
				}
			?>
		</div>
	</body>
</html>