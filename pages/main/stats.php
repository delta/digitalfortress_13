<?php
include "config.php";
if(isset($_POST['sort']))
$_SESSION['stats_sort']=$_POST['sort'];
?>
<html>
<!--	<script src="/js/jquery.js"></script>	-->
<script src="../../js/jquery.js"></script>
<script>
var updateInterval = setInterval(function() {
  $('#content').load('statsajax.php');
},60*1000);
</script>
<body onload="$('#content').load('statsajax.php');">
<div id='content'></div>
</body>
</html>

