<?php 
include "config.php";
			mysql_connect($host,$user,$pass);
			mysql_select_db($db);
?>
<center><h2>Scores</h2>
<style>
#team_name{
text-align:center;
}
#team_score{
text-align:center;
}
/* Should change the button css */
button {
display:inline-block;
min-width: 50px;
width: 210px;
padding:5px 10px;
}
</style>
<?
$c=0;
$score_by_name=array();
$score_by_value=array();
$query="SELECT DISTINCT `handle` FROM  `users`";
$result=mysql_query($query);
echo mysql_error();
while($row=mysql_fetch_assoc($result))
{
$handle=$row['handle'];
$score=0;
$c=0;
foreach($categories as $cat)
{
$c++;
$query="SELECT * FROM `$score_table` WHERE `category`='$c' && `handle`='$handle' ";
$res=mysql_query($query);
//echo $query;
$d=0;
while($tasks=mysql_fetch_assoc($res))
{
$score+=$scores[$c-1][$tasks['task_id']-1];
$d++;
}
}
$temp[]=array("name"=>"$handle","score"=>"$score");
$score_by_name["$handle"]="$score";
$score_by_value["$score"]="$handle";
if(!isset($_SESSION['stats_sort'])||$_SESSION['stats_sort']=='name')
$next='score';
else 
$next='name';
}
$html=<<<ABC
<script>
function sortfunc(by)
{
document.getElementById("sort").value=by;
document.getElementById("sorter").submit();
}
</script>
<form action='' method='post' id='sorter'>
<input type='hidden' value='name' name='sort' id='sort'/>
</form>
<table id='score_table' border=5 > 
<thead>
<th width='300' onclick="sortfunc('name')" id='handle' ><button  >Handle</button></th>
<th width='300' onclick="sortfunc('score')" id='handle' ><button  >Score</button></th>
</thead>
ABC;
echo $html;
echo "<tbody>";
$temp1=array();

function invenDescSortscore($item1,$item2)
{
    if ($item1['name'] == $item2['name']) return 0;
    return ($item1['name'] > $item2['name']) ? 1 : -1;
}
function invenDescSortname($item1,$item2)
{
    if ($item1['score'] == $item2['score']) return 0;
    return ($item1['score'] > $item2['score']) ? 1 : -1;
}
usort($temp,'invenDescSort'.$next);
foreach($temp as $key=>$value)
{
echo "<tr>";
echo "<td id='team_name'>{$value['name']}</td>";
echo "<td id='team_score'>{$value['score']}</td>";
echo "</tr>";
}

?>
</center>
