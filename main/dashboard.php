<?php
	include 'config.php';
	mysql_connect($host,$user,$pass);
	mysql_select_db($db);
	$user='test';
?>

<style>
	.inline{
		display:inline;
	}
</style>

<?php
	$query="SELECT * FROM `$user_table` WHERE `user_name` = '$user' LIMIT 1";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	$team=$row['team'];
	echo $team;

	$c=0;
	foreach($categories as $cat){
		echo "<br /><br />$cat:<br />";
		$c++;
		$query="SELECT * FROM `$score_table` WHERE `category`='$c' && `team`='$team' ";
		$res=mysql_query($query);
		$done=array();
		while($tasks=mysql_fetch_assoc($res)){
			$done[$tasks['task_id']]=1;
		}
		$d=0;
		foreach($scores[$c-1] as $t){
			$d++;
			echo "<a href='../$cat/task$d.php' class='inline' >Task $d</a>";
			if($done[$d])echo "<img height = '20' src='images/tick.png' />";
			else echo "&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;&nbsp;";
		}
	}
?>