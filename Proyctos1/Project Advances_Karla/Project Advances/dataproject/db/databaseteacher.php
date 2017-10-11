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
	


	$insert = "INSERT into teacher values ($ID,'$Name','$Lastname','$Address','$Phone','$Genre','$Email')";
	$result = mysqli_query($conection,$insert)
	or die ("insert failed");

	mysqli_close($conection);
	echo ("insert ok");
	header("location: ../db.php");

	






?>

</body>
</html>
