<?php
	include 'config.php';
	mysql_connect($host,$user,$pass);
	mysql_select_db($db);
	if($testing)
	$user='test';
?>
<html>
<head>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
</head>
<style>
	.inline{
		display:inline;
	}
</style>
<body>
<?php
	require_once "header.php";
	$query="SELECT * FROM `$user_table` WHERE `user_name` = '$user' LIMIT 1";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	$handle=$row['handle'];
//	echo $team;

	$c=0;
	echo "<table style='text-align:center' border=1><thead><th>Category</th><th>Task1</th><th>Task2</th><th>Task3</th><th>Task4</th><th>Task5</th></thead><tbody>";
	foreach($categories as $cat){
		echo "<tr><td>$cat:</td>";
		$c++;
		$query="SELECT * FROM `$score_table` WHERE `category`='$c' && `handle`='$handle' ";
		$res=mysql_query($query);
		$done=array();
		while($tasks=mysql_fetch_assoc($res)){
			$done[$tasks['task_id']]=1;
		}
		$d=0;
		$counter=0;
		foreach($scores[$c-1] as $t){
			$d++;
			$counter++;
			echo "<td>";
			if($done[$d])
					echo "<a href='../$cat/task$d/' class='inline' ><img height = '20' src='images/tick.png' /></a>";
			else 
					echo "<a href='../$cat/task$d/' class='inline' >Task$d</a>";
		}
		while($counter++<$maxtasks)echo "<td>---</td>";
		echo "</tr>";
	}
	echo "</tbody></table>";
?>
</body>
