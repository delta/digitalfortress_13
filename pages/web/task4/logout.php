<?php
  
setcookie("username","",time()-3600);
setcookie("password","",time()-3600);
setcookie("manager","",time()-3600);
setcookie("final","",time()-3600);

			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			header("Location:http://".$host.$uri);
?>