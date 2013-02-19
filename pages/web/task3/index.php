<?php
	
if(isset($_GET['submit'])){
	if($_FILES['file']['error']==0){
		$filename = sha1(uniqid(mt_rand()), TRUE);
		$path = "./tmp/";
		if(move_uploaded_file($_FILES['file']['tmp_name'], $filename.$path)){
			$_COOKIE['user_url'] = "";
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
	</head>
	<body>
		<center></center>
		<img src="<?php echo $url?>">
		<?php 
			if(isset($_COOKIE['user_url'])){
				echo "U seem to b a new user";
			}
		?>
		<form action="" method="get" enctype="multipart/form-data">
			<input type="file" name="file" />
			<input type="submit" name="submit" value="submit" />
		</form>
	</body>
</html>