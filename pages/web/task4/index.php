<?php
	if(isset($_REQUEST['final'])) setcookie("final","almost complete");
	$hs  = "http://".$_SERVER['HTTP_HOST'];
	$url   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $redirect = $hs."/web/task4/?pages=";
	session_start();
?>
<html>
	<head>
		<title>Web-Task4-Crappy SIte</title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>		
	</head>
	<body>
		<?php require_once "header.php";?>
		<center>task4</center>
		<p>hey i'm Paramesh! i did intern in this company "Crappy" and developed a few apps. but in the end i got in bad terms with my team manager and he won't add me to final list of ppo but i built most part of the app. Can u please hack their site and add me to the list by accessing manager admin page. And also u hav to get the ceo admin panel and re-accept the list.. i hav left a loop hole in the admin md5 login panel. i dnt knw my manager's user name but his name is "Vignesh". All the BEst!! </p>

        <a href="<?php echo $redirect;?>home">HOME</a>
		<a href="<?php echo $redirect;?>subscribe">SUBSCRIBE</a>
		<a href="<?php echo $redirect;?>products">PRODUCTS</a>

<?php
//print_r($_SESSION);
if( isset($_SESSION['task4loggedin']) && ($_SESSION['task4loggedin']==1))
{
		   foreach($_SESSION['cookie'] as $key=>$value)
		   setcookie("$key",$value);
		   if($key=='username')$tempusername=$value;
		   /*
	       setcookie("username",$_SESSION["cookie"]['username']);
	       setcookie("password",$_SESSION["cookie"]['password']);
	       setcookie("manager",$_SESSION["cookie"]["manager"]);
		    */
}

if(isset($_SESSION['task4loggedin']) && $_SESSION['task4loggedin']==0){
	setcookie("username","",time()-36000);
	setcookie("password","",time()-36000);
	setcookie("manager","",time()-36000);
	setcookie("final","",time()-36000);
	session_destroy();
}

if(isset($_SESSION['task4loggedin'])){
	if($_SESSION['cookie']["username"]  == "VIGNESH_DELTA"||$_COOKIE["username"] == "VIGNESH_DELTA"){
?>
         <a href="<?php echo $redirect;?>pmessage">PRIVATE MESSAGE</a>
<?php
}else{
?>
         <a href="<?php echo $redirect;?>userinfo">USERINFO</a>
<?php
}
?>
         <a href="/web/task4/logout.php">LOGOUT</a>

<?
}else{
?>

		<a href="<?php echo $redirect;?>register">REGISTER</a>
			<div align="center">
			<form method="get" action="/web/task4/login/">
				<table>
					<tr>
						<td><label for="user">Username : </label></td>
						<td><input type="text" name="user" placeholder="Enter Username"/></td>
					</tr>
					<tr>
						<td><label for="user">Password : </label></td>
						<td><input type="password" name="password" placeholder="Enter password"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Login"/></td>
					</tr>
				</table>
			</form>
			</div>
<?
}
if(isset($_SESSION['part1']) && !isset($_COOKIE['final']))
echo "Now try logging into the admin panel!!";
   if(isset($_COOKIE['final'])){
      echo "<br/> hooray!!, clear the logs ( in /files/logs/logs.txt ) to cover your track ;)";
   }
?>


<div id="content">
   <?php if(isset($_REQUEST['pages']))include "requir/".$_REQUEST['pages'].".php"; else include "requir/home.php" ?>
</div>

	</body>
</html>
