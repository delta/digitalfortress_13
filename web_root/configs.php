<?php
			$host="localhost";
			$db  ="ctf";
			$user="ctf";
			$pass="Capture!!!";
			$task1user="task1";
			$task1password="task1pass";
			$task4user="task4";
			$task4password="";
			$user_table="users";
			$score_table="scores";
			$ans_table="ans";
			$session_save_path="/";
			//$LOGGED_IN=1;
			
			$testing=0;								// Should make this zero while deploying
			$not_integrated=1;								// Should make this zero while deploying
			
			$categories=array("web","trivia","crypto");
			$maxtasks=5;
			$scores=array(
					array(100,200,300,400),
					array(100,200,300,400,500),
					array(100,200,300,400,500)
				     );
			$levelpass=array(
					array("729c198b0cf9571deedfe3176787e40d","eeb13ced4c1a7855f153510248a7fa00","33cd69c166241bb2632a905f427f4676","2b3fe0cf751bd39ee0a88a65ea9a7332"),	//cf56c47e6f561f575d4f277ca069cb32		// Web
					array("6997bef1dc19b9ef4b3ed4a149651afe","e458c83de02dbc75d13affd0ce3995ee","813009f796c58bf43d4662d3f4184d43","f274e316af04a5ac162ed923a0735848","1f2c9df19ea3ff7611506791d19cf60b"),		//Trivia
					 );
			session_start();
?>
