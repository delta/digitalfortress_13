<?php
   if(isset($_REQUEST['final']))
      setcookie("final","almost complete");
  			$hs  = "http://".$_SERVER['HTTP_HOST'];
			$url   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                        $redirect = $hs.$url."?pages=";
	session_start();
?>
<html>
	<head>
		<title>Crappy SIte</title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>		
	</head>
	<body>
		<?php require_once "header.php";?>
		<center>task4</center>
                <a href="<?php echo $redirect;?>home">HOME</a>
		<a href="">SUBSCRIBE</a>
		<a href="">PRODUCTS</a>

<?php
//print_r($_SESSION);
if(isset($_SESSION["cookie"]) && ($_SESSION['task4loggedin']==1))
{
		   foreach($_SESSION['cookie'] as $key=>$value)
		   setcookie("$key",$value);
		   /*
	       setcookie("username",$_SESSION["cookie"]['username']);
	       setcookie("password",$_SESSION["cookie"]['password']);
	       setcookie("manager",$_SESSION["cookie"]["manager"]);
		    */
}
if($_SESSION['task4loggedin']==0){
	setcookie("username","",time()-36000);
	setcookie("password","",time()-36000);
	setcookie("manager","",time()-36000);
	setcookie("final","",time()-36000);
}
if(isset($_COOKIE["username"])){
	
   if($_COOKIE["username"] == "VIGNESH_DELTA"){
?>
         <a href="<?php echo $redirect;?>pmessage">PRIVATE MESSAGE</a>
<?php
}else{
?>
         <a href="<?php echo $redirect;?>userinfo">USERINFO</a>
<?php
}
?>
         <a href="/web/task4/logout">LOGOUT</a>

<?
}else{
?>

		<a href="<?php echo $redirect;?>register">REGISTER</a>
			<div align="center">
			<form method="get" action="/web/task4/login/">
				<table>
					<tr>
						<td><label for="user">Username : </label></td>
						<td><input type="text" name="user" /></td>
					</tr>
					<tr>
						<td><label for="user">Password : </label></td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="submit"/></td>
					</tr>
				</table>
			</form>
			</div>
<?
}
   if(isset($_COOKIE['final'])){
      echo "<br/> hooray!!, clear the logs to cover your track ;)";
   }
?>


<div id="content">
   <?php if(isset($_REQUEST['pages']))include "requir/".$_REQUEST['pages'].".php"; else include "requir/home.php" ?>
</div>

	</body>
</html>
