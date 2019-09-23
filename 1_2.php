<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['add'] = $_POST['Address'];
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>