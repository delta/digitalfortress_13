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
		<link rel="stylesheet" href="/css/template.css" type="text/css"/>
	</head>
	<body>
		<div id="maintitle"><a href="/">
			<pre>
                                    __           _                     
 ____  _        _  _          _    / _|         | |                    
|  _ \(_) __ _ (_)| |_  __ _ | |  | |_ ___  _ __| |_ _ __ ___  ___ ___ 
| | \ | |/ _' || || __|/ _' || |  |  _/ _ \| '__| __| '__/ _ \/ __/ __|
| |_/ | | (_| || || |_( (_| || |  | || (_) | |  | |_| | |  __/\__ \__ \
|____/|_|\__. ||_|\___|\__._||_|  |_| \___/|_|   \__|_|  \___||___/___/
          / | |			                                       
         / (| |			                                       
         \____/                                                        

			</pre>                                                                                  
		</a></div>
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
	</body>
</html>