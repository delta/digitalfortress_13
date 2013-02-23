<?php
/*
 * Routes all request to their pages
 * 
 * Make sure they cannot be reached directly..
 * 
 */
 

// Remove the following code while deploying.


$req_path = $_GET['query'];

$routes = array("web/task1/"=>"/pages/web/task1/index.php",
				"web/task2/"=>"/pages/web/task2/index.php",
				"web/task3/"=>"/pages/web/task3/index.php",
				"web/task4/"=>"/pages/web/task4/index.php",
				"web/task4/login/"=>"/pages/web/task4/login.php",
				"web/task4/subscribe/"=>"/pages/web/task4/subscribe.php",
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
