<?php
	include "configs.php";
	if(isset($_POST['sort']))
	$_SESSION['stats_sort']=$_POST['sort'];
?>
<html>
	<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	<script src="/js/jquery.js"></script>
	<script>
		var updateInterval = setInterval(function() {
		  $('#content').load('statsajax.php');
		},60*1000);
	</script>
<body onload="$('#content').load('statsajax.php');">
<?php include "header.php"; ?>
	<div id='content'></div>
</body>
</html>

