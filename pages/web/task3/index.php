<?php
	
if(isset($_GET['submit'])){
	if($_FILES['file']['error']==0){
		$filename = sha1(uniqid(mt_rand()), TRUE);
		$path = "/tmp/";
		if(move_uploaded_file($_FILES['file']['tmp_name'], $path.$filename)){
			$_COOKIE['user_url'] = $path.$filename;
		}
	}
	$url = "not found img url";
}
if(isset($_COOKIE['user_url'])){
		$url=$_COOKIE['user_url'];
}
?>

<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<?php require_once "header.php";?>
		<div id="contents">
			<center>Web-task-3</center>
			<div id="question">Question question question question question question question question question question question
				 question question question question question question question question question question question question question
				  question question question question question question question question question question question question question
				   question question question question question question question question question question question question
		   </div>
		   
		   
			<img src="<?php echo $url?>">
			<?php 
				if(isset($_COOKIE['user_url'])){
					echo "U seem to b a new user";
				}
			?>
			<div align="center">
				<form action="" method="get" enctype="multipart/form-data">
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