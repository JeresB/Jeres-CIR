<?php
	$pass = '5hu3YJw7';
	$pass = crypt($pass, '$6$rounds=5000$usesomesillystringforsalt$');
	echo $pass;
?>
