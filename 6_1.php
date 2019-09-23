<?php
    if(!empty(@$_POST['remember'])) {
        setcookie('username',$_POST['uname']); 
        setcookie('password',$_POST['pass']);
        echo "Cookies set successfully";
    }
    else {
        setcookie('username','',time()+600); 
        setcookie('password','',time()+600);
        echo "Cookies not set";    
    }
?>
<a href="6.php">Go to Login Page </a>