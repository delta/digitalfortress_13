<?php
	include 'configs.php';
	mysql_connect($host,$user,$pass);
	mysql_select_db($db);

	if($not_integrated)
			$username="test";
?>
<html>
<head>
		<title>Digital Fortress - Dashboard</title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
</head>
<style>
	.inline{
		display:inline;
	}
	th,td {
		padding:25px;
		text-align:center;
		height:30px;
	}
</style>
<body>
<?php
	require_once "header.php";
	$query="SELECT * FROM `$user_table` WHERE `user_name` = '$username' LIMIT 1";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	$handle=$row['handle'];
	echo $handle;

	$c=0;
	$score=0;
	echo "<div align='center'>";
	echo "<table style='text-align:center' border=1><thead><th>Category</th><th>Task1</th><th>Task2</th><th>Task3</th><th>Task4</th><th>Task5</th></thead><tbody>";
	foreach($categories as $cat){
		echo "<tr><td>$cat:</td>";
		$c++;
		$query="SELECT * FROM `$score_table` WHERE `category`='$cat' && `handle`='$handle' ";
		$res=mysql_query($query);
		$done=array();
		while($tasks=mysql_fetch_assoc($res)){
			$done[$tasks['task_id']+1]=1;
		}

		$d=0;
		$counter=0;
		foreach($scores[$c-1] as $t){
			$d++;
			$counter++;
			echo "<td>";
			if($done[$d])
					{
					echo "<a href='../$cat/task$d/' class='inline' ><img height = '20' src='images/tick.jpg' /></a>";
					$score=$score+$t;
					}
			else 
					echo "<a href='../$cat/task$d/' class='inline' >Task$d</a>";
		}
		while($counter++<$maxtasks)echo "<td>---</td>";
		echo "</tr>";
	}
	echo "</tbody></table></div>";
	echo "<center><h5>Total Score: $score</h5></center>";
?>
</body>
