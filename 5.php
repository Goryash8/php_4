<?php
    if(isset($_POST["submit"]))
    {
        session_start();
        $_SESSION["uname"] = $_POST["uname"];
        $_SESSION["password"] = $_POST["passowrd"];
        $_SESSION["mobile"] = $_POST["mobile"];
        $_SESSION["destroy"] = time() + 20;
        echo "Session Saved";
        header('location: 5_1.php');
    }
?>
<html>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    Username:-  <input type="text" name="uname" value="Username"/>
    mobile:-  <input type="text" name="uname" value="mobile"/>
    Password:-  <input type="password" name="password"/>
    <input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>