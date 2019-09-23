<?php
	setcookie('name',$_POST['name'],time()+120);
	setcookie('address',$_POST['address'],time()+120);
	print_r($_COOKIE);
	echo "<br>name is : ".$_COOKIE['name']."<br>";
	echo "addresss is".$_COOKIE['address']."<br>"; 
?>