<?php

if (isset($_COOKIE['username'])) {
	include "configs.php";
	if (isset($_REQUEST['subscribe']))
		if (isset($_REQUEST['/files/logs']))
			echo "Level Password is " . $levelpass[0][3];
		else
			echo "User added successfully to mailing list";
}
?>