<?php
			$host="localhost";
			$db  ="digitalfortress";
			$user="digitalfortress";
			$pass="mpwn4GhBqR7LmzjU";
			$task1user="task1";
			$task1password="aqUGHGeXqrjtuEVj";
			$task4user="task4";
			$task4password="aqUGHGeXqrjtuEVj";
			$user_table="users";
			$score_table="scores";
			$ans_table="ans";
			
			
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
					array("63f901e30c2114358475d37412838ad3","90a8468110bc7cd5e6a7991fb26b91cf","20e8d63edfcbc9c80a3fc643706c0d4d","8b8e78853e1f96bde0781e5110a8401e","5007ba773d2085bbdd292e0d54e318e3")		//Crypto
				     );
			session_start();
?>
