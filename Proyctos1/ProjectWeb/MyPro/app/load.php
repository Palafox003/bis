<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
	<title></title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<?php
require_once("../db/db.class.php");

$name=$_POST["name"];
$cost=$_POST["cost"];
$size=$_POST["size"];
$x1=$_POST["x1"];
//$x2=$_POST["x2"];

$con=new DbCon();

	$con=new DbCon();
	$con->insert("img","null,'$name','$cost',$size,'$x1'");

	//copy($_FILES["picture"]["tmp_name"], "../img/$imgName");



$result=$con->search("*","img","1");
$num_result=$result->num_rows;

echo "Results=$num_result";

echo "<table class='table table-hover'>";
	echo "<thead class='thead-inverse'>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Cost</th>
				<th>Size</th>
				<th>Image</th>
				<th>Delete</th>
			</tr>
		</thead>";
		
	for ($i=0; $i<$num_result; $i++) { 
		$row=$result->fetch_assoc();
		echo "<tbody>
			<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["cost"]."</td>";
			echo "<td>".$row["size"]."</td>";
			echo "<td><a href='../img/".$row["img"]."'><i class='fa fa-search fa-2x'></i></a></td>";
			echo "<td><a href='#'><i class='fa fa-trash fa-2x'></i></a></td>";
			"</tr>
		</tbody>";
	}
echo "</table>";
?>

</body>
</html>