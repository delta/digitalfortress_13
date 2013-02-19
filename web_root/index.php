<?php
/*
 * Routes all request to their pages
 * 
 * Make sure they cannot be reached directly..
 * 
 */
 

// Remove the following code while deploying.

echo "HOST : ".$_SERVER['HTTP_HOST']."  SELF: ".$_SERVER['PHP_SELF'];
print_r($_GET);

$req_path = $_GET['query'];



?>
