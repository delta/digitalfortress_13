<?php
if(isset($_REQUEST['submit'])){
	if(isset($_REQUEST['category']) && isset($_REQUEST['task'])){
		if($_REQUEST['category']<=5 && $_REQUEST['category']>0 && $_REQUEST['task']<=5 && $_REQUEST['task']>0){
			$cat = htmlentities($_REQUEST['category'],ENT_QUOTES);
			$task = htmlentities($_REQUEST['task'],ENT_QUOTES);
			$ans = md5(htmlentities($_REQUEST['ans'],ENT_QUOTES));
			
			mysql_connect("host","user","passwd");
			mysql_select_db("db");
			
			$query = "SELECT * FROM `ans` where `category`={$cat} AND `task`={$task} AND 'ans'={$ans}";
			$result = mysql_query($query);
			
			if(mysql_affected_rows($result)){
				//update users table
			}
		}
	}
}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<center>submission page</center>
		<form action="" method="get">
			<label for="category">category</label>
			<select name="category">
				<option value="1">crypto</option>
				<option value="2">web</option>
				<option value="3">reverse engineer</option>
				<option value="4">trivia</option>
				<option value="5"></option>
			</select>
			<label for="task">Select a task</label>
			<select name="task">
				<option value="1">task1</option>
				<option value="2">task2</option>
				<option value="3">task3</option>
				<option value="4">task4</option>
				<option value="5">task5</option>
			</select>
			<label for="ans">Ans:</label>
			<input type="text" name="ans" value="ans"/>
			<input type="submit" name="submit" value="submit" />
		</form>
	</body>
</html>