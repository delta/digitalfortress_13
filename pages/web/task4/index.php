<?php
   if(isset($_REQUEST['final']))
      setcookie("final","almost complete");
  			$hs  = "http://".$_SERVER['HTTP_HOST'];
			$url   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                        $redirect = $hs.$url."?pages=";
?>
<html>
	<head>
		<title>Crappy SIte</title>
	</head>
	<body>
		<center>task4</center>
                <a href="<?php echo $redirect;?>home">HOME</a>
		<a href="">SUBSCRIBE</a>
		<a href="">PRODUCTS</a>

<?php
if(isset($_COOKIE["username"])){
   if($_COOKIE["username"] == "POKKA_DELTA"){
?>
         <a href="<?php echo $redirect;?>pmessage">PRIVATE MESSAGE</a>
<?php
}else{
?>
         <a href="<?php echo $redirect;?>userinfo">USERINFO</a>
<?php
}
?>
         <a href="logout.php">LOGOUT</a>

<?
}else{
?>

		<a href="<?php echo $redirect;?>register">REGISTER</a>
		<form method="get" action="login.php">
			<input type="text" name="user" />
			<input type="password" name="password" />
			<input type="submit" name="submit" value="submit"/>
		</form>



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
