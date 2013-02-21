<?php
if(isset($_REQUEST['submit'])){
	if(isset($_REQUEST['ans'])){
		$ans = stripslashes($_REQUEST['ans']);
		$flag =1;
		if(md5($ans)==="md5ans"){
			$ans = "level password";
		} else {
			$flag = 0;
			$ans = "wrong answer";
		}
	}
}
?>
<html>
	<head>
		<title>title</title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<?php require_once "header.php";?>
		<div id="contents">
			<center>Trivia-task-1</center>
			<div id="question">Question question question question question question question question question question question
				 question question question question question question question question question question question question question
				  question question question question question question question question question question question question question
				   question question question question question question question question question question question question
		   </div>
			
			<?php
				if(isset($_REQUEST['ans'])){
					if($flag)echo $ans;
					else echo "";
				} else if(!isset($_REQUEST['ans'])){?>
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