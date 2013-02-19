<?php
			$host="localhost";
			$user="paramesh";
			$pass="pass";
			$db  ="digitalfortress";
			$user_table="users";
			$score_table="scores";
			$ans_table="ans";
			$categories=array("web","trivia","crypto");
			$scores=array(
					array(10,20,30,40),
					array(10,20,30,40),
					array(10,20,30,40)
				     );
			$l=1;
			foreach($categories as $c)
			{
			$catid["$c"]=$l++;
			}
			session_start();
?>
