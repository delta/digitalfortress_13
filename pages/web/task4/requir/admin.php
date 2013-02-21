<?php
   if(isset($_REQUEST['submit'])){
        include "requir/config.php";
        $cond = $_REQUEST['user'];
 	$query = "SELECT `user`,`password` FROM `task4.2` WHERE `user`='$cond'";
	$result = mysql_query($query);
        if($data = mysql_fetch_assoc($result)){
                if($data['password'] == md5($_REQUEST['password']))
                    if($_SERVER['HTTP_USER_AGENT'] != "moz-web")
                       echo "the useragent isn't moz-web.the action will be reported";
                    else{
 			$query1 = "SELECT DISTINCT(`user`) FROM `task4.1`";
			$result1 = mysql_query($query1);
        		while($data1 = mysql_fetch_assoc($result1))
               			echo $data1['user']."<br/>";
?>
                  <form action="" method="post">
                  <input type="submit" name="final" value="confirm payment"/>
                  </form>
<?php
     }                   
                else
                   echo "bad,almost there";
	}
        else
            echo "username incorrect";
   }
   else if(!isset($_REQUEST['final'])){
?>
		<form method="post" action="">
			<input type="text" name="user" />
			<input type="password" name="password" />
			<input type="submit" name="submit" value="login"/>
		</form>
<?php
}
?>
