<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<form action="6_1.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
			<td>username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">remember :<input type="checkbox" name="remember"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="submt"></td>
		</tr>
		</table>
	</form>
	<?php
		echo "username is : ".$_COOKIE['username']."<br>";
		echo "password is : ".$_COOKIE['password'];
	?>
</body>
</html>