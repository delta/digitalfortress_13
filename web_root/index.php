<?php
/*
 * Routes all request to their pages
 * 
 * Make sure they cannot be reached directly..
 * 
 */
 

// Remove the following code while deploying.

 

ini_set("use_cookies",1);
ini_set("use_only_cookies",1);
$cookie_path = "/";
$cookie_timeout = 60 * 30;
$garbage_timeout = $cookie_timeout + 300;
ini_set('session.name',"PHPSESSID");
ini_set('session.cookie_domain','.pragyan.org');
ini_set("session.save_path", "/var/www/html/13/cms/uploads/sessions");
ini_set('session.gc_probability', 1);
session_set_cookie_params($cookie_timeout, $cookie_path);
ini_set('session.gc_maxlifetime', $garbage_timeout);

include "configs.php";

if(!isset($_SESSION['userId'])){
	header("Location: http://www.pragyan.org/13/home/events/codeit/digital_fortress/+login");
}

$pid=$_SESSION['userId'];

$connection= mysql_connect("localhost",$user,$pass) or die(mysql_error());
mysql_select_db("pragyan13_cms")  or die(mysql_error());
$query = "SELECT * FROM `pragyan13_cms`.`pragyanV3_users` WHERE `user_id`='{$pid}' LIMIT 1";
$result = mysql_query($query)  or die(mysql_error());

if(mysql_num_rows($result)){
	$res = mysql_fetch_assoc($result);
}
mysql_close($connection);


$user_name = $res["full_name"];
$handle = $res['user_name'];
$query="INSERt IGNORE INTO `users` VALUES('$user_name','$handle','$pid')" or die(mysql_error());
echo $query;
$connection = mysql_connect("localhost",$user,$pass) or die(mysql_error());
mysql_select_db("ctf")  or die(mysql_error());
mysql_query($query) or die(mysql_error());



$req_path = $_GET['query'];
$routes = array("web/task1/"=>"/pages/web/task1/index.php",
				"web/task2/"=>"/pages/web/task2/index.php",
				"web/task3/"=>"/pages/web/task3/index.php",
				"web/task4/"=>"/pages/web/task4/index.php",
				"web/task4/addmail"=>"/pages/web/task4/requir/addmail.php",				
				"web/task4/files/"=>"/pages/web/task4/files/",
				"web/task4/files/downloads/"=>"/pages/web/task4/files/downloads/",
				"web/task4/files/downloads/products.txt"=>"/pages/web/task4/files/downloads/products.txt",
				"web/task4/files/logs/"=>"/pages/web/task4/files/logs/",
				"web/task4/files/mailinglist/"=>"/pages/web/task4/files/mailinglist/",
				"web/task4/login/"=>"/pages/web/task4/login.php",
				"web/task4/logout/"=>"/pages/web/task4/logout.php",
				"web/task4/products/"=>"/pages/web/task4/products.php",
				"web/task5/"=>"/pages/web/task5/index.php",
				"trivia/task1/"=>"/pages/trivia/task1/index.php",
				"trivia/task2/"=>"/pages/trivia/task2/index.php",
				"trivia/task3/"=>"/pages/trivia/task3/index.php",
				"trivia/task4/"=>"/pages/trivia/task4/index.php",
				"trivia/task5/"=>"/pages/trivia/task5/index.php",
				"crypto/task1/"=>"/pages/crypto/task1/index.php",
				"crypto/task2/"=>"/pages/crypto/task2/index.php",
				"crypto/task3/"=>"/pages/crypto/task3/index.php",
				"crypto/task4/"=>"/pages/crypto/task4/index.php",
				"crypto/task5/"=>"/pages/crypto/task5/index.php",
				"stats/"=>"/pages/main/stats.php",
				"statsajax/"=>"/pages/main/statsajax.php",
				"dashboard/"=>"/pages/main/dashboard.php",
				"submit/"=>"/pages/main/submit.php");


if($req_path=="" || empty($req_path) || !isset($_GET['query'])){
	require_once __DIR__."/../pages/main/home.php";
} else if(isset($routes[$req_path]) && file_exists(__DIR__."/..".$routes[$req_path])){
	require_once __DIR__."/..".$routes[$req_path]; 
} else if(isset($routes[$req_path."/"]) && file_exists(__DIR__."/..".$routes[$req_path."/"])){
	require_once __DIR__."/..".$routes[$req_path."/"]; 
} else {
	echo "Oops!! 404, File not found";
}

?>
