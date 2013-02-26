<?php

if(isset($_COOKIE['username'])){

?>
it shld hav '@' or else the same name in the list will be deleted

		<form method="post" action="/web/task4/addmail">
			<input type="text" name="/files/mailinglist" />
			<input type="submit" name="subscribe" value="subscribe"/>
		</form>

<?php
}
else 
	echo "Please Login to access this page"
?>