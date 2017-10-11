<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php


	$server="localhost";
	$user="root";
	$pass="";
	$db="examweb";
	$conection = mysqli_connect($server,$user,$pass,$db)
	or die ("error in the conection");

	$ID = $_POST["id"];
	$Name = $_POST["name"];
	$Price = $_POST["price"];
	
	$Size = $_POST["size"];
	


	$insert = "INSERT into products values ($ID,'$Name','$Price','$Size')";
	$result = mysqli_query($conection,$insert)
	or die ("insert failed");

	
	mysqli_close($conection);
	echo ("insert ok");
	

	






?>

</body>
</html>
