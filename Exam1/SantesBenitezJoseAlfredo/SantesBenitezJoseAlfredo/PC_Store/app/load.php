<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
	<title></title>
</head>
<body style="background-color:rgba(255,0,0,0.5);">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<?php
require_once("../db/db.class.php");

$name=$_POST["name"];
$lastname=$_POST["lastname"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$imgName=$_FILES["picture"]["name"];

$con=new DbCon();

	$con=new DbCon();
	$con->insert("employee","null,'$name','$lastname','$age','$sex','$imgName'");

	copy($_FILES["picture"]["tmp_name"], "../img/$imgName");


$result=$con->search("*","employee","1");
$num_result=$result->num_rows;

echo "Results=$num_result";

echo "<table class='table table-hover'>";
	echo "<thead class='thead-inverse'>
			<tr>
				<th>Name</th>
				<th>LastName</th>
				<th>Age</th>
				<th>Sex</th>
				<th>Image</th>
			</tr>
		</thead>";
		
	for ($i=0; $i<$num_result; $i++) { 
		$row=$result->fetch_assoc();
		echo "<tbody>
			<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["lastname"]."</td>";
			echo "<td>".$row["age"]."</td>";
			echo "<td>".$row["sex"]."</td>";
			echo "<td><a href='../img/".$row["img"]."'><i class='fa fa-search fa-2x'></i></a></td>";
			"</tr>
		</tbody>";
	}
echo "</table>";
?>

</body>
</html>