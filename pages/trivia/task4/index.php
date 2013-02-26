<?php
//ans is DOS
if(isset($_REQUEST['submit'])){
	if(isset($_REQUEST['ans'])){
		include "configs.php";
		$ans = strtoupper(stripslashes($_REQUEST['ans']));
		$flag =1;
		if(md5($ans)==="a58e0423869da99d6ca169de8a000cc7"||md5($ans)==="3d58aded5f9b5c7e1b8cb80b776f1ccf"){
			$ans = $levelpass[1][3];
		} else {
			$flag = 0;
			$ans = "wrong answer";
		}
	}
}
?>
<html>
	<head>
		<title>Trivia-Task 4</title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<?php require_once "header.php";?>
		<div id="contents">
			<center>Trivia-task-4</center>
			<div id="question"><pre>

			&lt;?xml version="1.0"?&gt;
			&lt;!DOCTYPE lolzzzz [
			 &lt;!ENTITY laugh "laugh">
			 &lt;!ENTITY laugh1 "&amp;laugh;&amp;laugh;&amp;laugh;&amp;laugh;&amp;laugh;&amp;laugh;&amp;laugh;&amp;laugh;&amp;laugh;&amp;laugh;">
			 &lt;!ENTITY laugh2  "&amp;laugh1;&amp;laugh1;&amp;laugh1;&amp;laugh1;&amp;laugh1;&amp;laugh1;&amp;laugh1;&amp;laugh1;&amp;laugh1;&amp;laugh1;">
			 &lt;!ENTITY laugh3 "&amp;laugh2;&amp;laugh2;&amp;laugh2;&amp;laugh2;&amp;laugh2;&amp;laugh2;&amp;laugh2;&amp;laugh2;&amp;laugh2;&amp;laugh2;">
			 &lt;!ENTITY laugh4 "&amp;laugh3;&amp;laugh3;&amp;laugh3;&amp;laugh3;&amp;laugh3;&amp;laugh3;&amp;laugh3;&amp;laugh3;&amp;laugh3;&amp;laugh3;">
			 &lt;!ENTITY laugh5 "&amp;laugh4;&amp;laugh4;&amp;laugh4;&amp;laugh4;&amp;laugh4;&amp;laugh4;&amp;laugh4;&amp;laugh4;&amp;laugh4;&amp;laugh4;">
			 &lt;!ENTITY laugh6 "&amp;laugh5;&amp;laugh5;&amp;laugh5;&amp;laugh5;&amp;laugh5;&amp;laugh5;&amp;laugh5;&amp;laugh5;&amp;laugh5;&amp;laugh5;">
			 &lt;!ENTITY laugh7 "&amp;laugh6;&amp;laugh6;&amp;laugh6;&amp;laugh6;&amp;laugh6;&amp;laugh6;&amp;laugh6;&amp;laugh6;&amp;laugh6;&amp;laugh6;">
			 &lt;!ENTITY laugh8 "&amp;laugh7;&amp;laugh7;&amp;laugh7;&amp;laugh7;&amp;laugh7;&amp;laugh7;&amp;laugh7;&amp;laugh7;&amp;laugh7;&amp;laugh7;">
			 &lt;!ENTITY laugh9 "&amp;laugh8;&amp;laugh8;&amp;laugh8;&amp;laugh8;&amp;laugh8;&amp;laugh8;&amp;laugh8;&amp;laugh8;&amp;laugh8;&amp;laugh8;">
					]>
			&ltlolzzzz>&amp;laugh9;&lt/lolzzzz>

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
