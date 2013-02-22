<?php
//ans is INTENSIONALPROGRAMMING
if(isset($_REQUEST['submit'])){
	if(isset($_REQUEST['ans'])){
		$ans = stripslashes($_REQUEST['ans']);
		$flag =1;
		if(md5($ans)==="a447664b6e419c06808e3bd64ba26fde"){
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
			<center>Trivia-task-2</center>
			<div id="question"><pre>
			quick_sort(a) = if eof(first a) then a else follow(quick_sort(b0),quick_sort(b1)) fi<br />
				where<br />
				p = first a < a;<br />
				b0 = a whenever p;<br />
				b1 = a whenever not p;<br />
				follow(x,y) = if xdone then y upon xdone else x fi<br />
					where<br />
						xdone = iseod x fby xdone or iseod x;<br />
					end;<br />
			end;<br /><br /><br />
			</pre></div>
			<div>Note: Answers consists only of uppercase letters and do not contain special characters or white spaces..</div>
			<?php
				if(isset($_REQUEST['ans']) && $flag){
					echo "<br/><br/><div align='center'>LEVEL PASSWORD: ".$ans."</div>";
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