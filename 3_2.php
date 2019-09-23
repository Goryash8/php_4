<?php 
session_start();
if(time()>$_SESSION['destroy']){
	session_destroy();
	echo"session destroyed";
}
else{
	echo"session will destroy in 10sec";
}