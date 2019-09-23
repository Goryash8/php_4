<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php 
 	if(@$_POST[submit]){
 		$ext=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
 		if($ext=='jpeg' || $ext=='jpg'){
 			echo "file is an image";
 		}
 		else{
 			echo "file isn't image";
 		}
 	}
 ?>
 <form action=" "method="POST" enctype="multipart/form-data">
 	<input type="file" name="image">
 	<input type="submit" name="submit" value="upload">
 </form>
</body>
</html>