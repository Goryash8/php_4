<?php
    if(!empty(@$_POST['submit'])) {
        setcookie('username',$_POST['uname'],time()+10); 
        setcookie('password',$_POST['cname'],time()+10);
        echo "Cookies set successfully";
    }
    else {
        echo "Cookies not set";    
    }
?>