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
	$db="baseproject";
	$conection = mysqli_connect($server,$user,$pass,$db)
	or die ("error in the conection");

	$ID = $_POST["id_student"];
	$Name = $_POST["Name"];
	$Lastname = $_POST["LastName"];
	$Address = $_POST["Address"];
	$Phone = $_POST["Phone"];
	$Genre = $_POST["Genre"];
	$Email = $_POST["Email"];
	$Name_sub = $_POST["Name_sub"];


	$insert = "INSERT into student values ($ID,'$Name','$Lastname','$Address','$Phone','$Genre','$Email','$Name_sub')";
	$result = mysqli_query($conection,$insert)
	or die ("insert failed");

	echo ("insert ok");
	mysqli_close($conection);
	
	

	






?>

</body>
</html>
