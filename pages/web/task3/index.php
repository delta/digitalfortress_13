<?php
session_start();
if(isset($_POST['submit'])){
	if($_FILES['file']['error']==0){
		$filename = sha1(mt_rand());
		$path = "/tmp/".$filename.basename($_FILES["file"]["name"]);
		if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){
			$_COOKIE['user_url'] = "/".$path;
			setcookie('user_url',$_COOKIE['user_url'],time()+600);
			$_SESSION["cookie"]=array();
			$_SESSION["cookie"]['user_url']=$_COOKIE['user_url'];
			$_SESSION["task3"]=1;
		}
		$ur=$path;
	}
	$url = "not found img url";
}
if( isset($_SESSION['task3']) && !empty($_SESSION['task3']))
{
		   foreach($_SESSION['cookie'] as $key=>$value)
		   setcookie("$key",$value);
//		   if($key=='username')$tempusername=$value;
}

print_r($_COOKIE);
print_r($_SESSION);
?>

<html>
	<head>
		<title>Web-Task 3</title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<?php require_once "header.php";?>
		<div id="contents">
			<center>Web-task-3</center>
			<div id="question">
				
			</div>
		   
			<img src="<?php 
				
				if(isset($_COOKIE['user_url'])){
					if($url=="../passwd.txt" || $_COOKIE['user_url']=='../passwd.txt'){echo $levelpass[0][2];}
					else echo $_COOKIE['user_url']."\">";
				}
			
			?> 
			<?php 
				if(!isset($_COOKIE['user_url'])){
					echo "U seem to b a new user";
				}
			?>
			<div align="center">
				<form action="" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td><label for="file">Your file : </label></td>
							<td><input type="file" name="file" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="submit" /></td>
						</tr>
					</table>
				</form>
			</div>
			
		</div>	
	</body>
</html>
