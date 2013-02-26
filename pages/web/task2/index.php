<html>
<head>
<title>Web-Task 2</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="robots" content="noindex" />
<link rel="stylesheet" href="/css/template.css" type="text/css"/>
<style>
	#log, #pass { color: white; background-color:black; padding-left:8px; padding-right:8px; }

</style>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<body bgcolor="#FFFFFF">
	<?php include "header.php";?>
<center>task2</center>
<?php
 if(isset($_REQUEST['user']) && isset($_REQUEST['key']))
 header('Location : ./oldindex.php');
        
   if(isset($_REQUEST['won'])||1)
     {
     	include "configs.php";
     	echo "congrats ! admin token : ".$levelpass[0][1]." ;"  ;
	 } 
?>

		<p>hey ,Derp here again! i threw a bet at my friend that i would find vulnerability in his website, but i am not able to find one. he would give me admin access token if i find it. Can u find any? </p>
<?php
if(isset($_REQUEST['user']) && isset($_REQUEST['key'])){
?>
<p><b>"hello" </b> <span><?php echo $_REQUEST['user'];?></span></p>
<p><span><?php echo $_REQUEST['key'];?></span> u r not an admin</p>
<?php
}
?>  
			<div align="center">
			<form method="get" action="">
				<table>
					<tr>
						<td><label for="user">Username : </label></td>
						<td><input type="text" name="user" placeholder="Enter Username"/></td>
					</tr>
					<tr>
						<td><label for="user">key : </label></td>
						<td><input type="password" name="key" placeholder="Secret Key"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Login"/></td>
					</tr>
				</table>
			</form>
			</div>
</body>
</html>
