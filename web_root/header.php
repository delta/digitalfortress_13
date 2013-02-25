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
<?php
if($LOGGED_IN!=1)
{
echo "<script>alert('Please Login at Pragyan to start hacking');window.location='http://www.pragyan.org/13/home/events/codeit/digital_fortress/+login';</script>";
die("Please Login at <a href='http://www.pragyan.org'>Pragyan</a> to Enter the event.<a href='http://www.pragyan.org/13/home/events/codeit/digital_fortress/+login' > LOGIN </a>");
}
else
{
	// Should link $user_name;
	//			   $handle;
	//			   $pid;
$query="INSERt IGNORE INTO `users` VALUES('$user_name','$handle','$pid')";
// 			mysql_query($query);

}
?>
