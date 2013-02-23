<?php $testing = 1;
if ($testing || isset($_REQUEST['submit'])) {
	if ($testing || isset($_REQUEST['category']) && isset($_REQUEST['task'])) {
		if ($testing || $_REQUEST['category'] <= 5 && $_REQUEST['category'] > 0 && $_REQUEST['task'] <= 5 && $_REQUEST['task'] > 0) {
			$cat = htmlentities($_REQUEST['category'], ENT_QUOTES);
			$task = htmlentities($_REQUEST['task'], ENT_QUOTES);
			$ans = md5(htmlentities($_REQUEST['ans'], ENT_QUOTES));

			include "configs.php";
			mysql_connect($host, $user, $pass);
			mysql_select_db($db);
			//Test
			if ($testing) {
				$cat = "web";
				$task = "task1";
				$ans = md5("hello");
				$username = "test";
			}
			$query = "SELECT * FROM `$ans_table` where `category`='{$cat}' AND `task`='" . substr($task, 4) . "' AND `ans`='{$ans}'";

			$result = mysql_query($query);
			//echo $query.'<br />';
			if (mysql_num_rows($result) > 0) {
				//update users table
				/*
				 $query ="SELECT * FROM `{$user_table}` WHERE `user_name` = '{$username}' LIMIT 1";
				 $res   = mysql_query($query);
				 $row   = mysql_fetch_assoc($res);
				 */
				//$username=$row['team'];
				$query = "INSERT IGNORE INTO `{$score_table}`(`handle`,`task_id`,`category`) VALUES('$username','" . substr($task, 4) . "','$cat')";
				echo $query;
				$result = mysql_query($query) or die("Error updating score.Contact admin");
				echo "<br /><h3>User : $username <br />Team : $team<br />Task : $cat $task <br /> Submitted Successfully</h3>";
			} else
				"Wrong Password";

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
		<?php
		require_once "header.php";
		?>
		<center>
			submission page
		</center>
		<div align="center">
			<form action="" method="get">
				<table>
					<tr>
						<td><label for="category">category</label></td>
						<td>
						<select name="category">
							<option value="1">crypto</option>
							<option value="2">web</option>
							<option value="3">reverse engineer</option>
							<option value="4">trivia</option>
							<option value="5"></option>
						</select></td>
					</tr>
					<tr>
						<td><label for="task">Select a task</label></td>
						<td>
						<select name="task">
							<option value="1">task1</option>
							<option value="2">task2</option>
							<option value="3">task3</option>
							<option value="4">task4</option>
							<option value="5">task5</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="ans">Ans:</label></td>
						<td>
						<input type="text" name="ans" placeholder="answer"/>
						</td>
						<td>
						<input type="submit" name="submit" value="submit" />
						</td>
					</tr>
			</form>
		</div>
	</body>
</html>
