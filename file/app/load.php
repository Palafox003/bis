<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
<body>


<?php
require_once("../db/db.class.php");
	
	$name=$_POST["name"];
	$cost=$_POST["cost"];
	$size=$_POST["size"];
	$imgName=$_FILES["picture"]["name"];
	$type=$_FILES["picture"]["type"];
$con=new DbCon();
	//print_r($_FILES);

	if($type=="image/jpeg" or $type=="image/png"){

	
		$con->insert("img","null,'$name','$cost',$size,'$imgName'");

	copy($_FILES["picture"]["tmp_name"], "../img/$imgName");	
}else{
	echo "Please check your type of file";
}

$result=$con->search("*","img","1");
$num_result=$result->num_rows;

echo "Results= $num_result";

	echo "<table class='table table-hover'>";
	
		echo "<tr>
	 <th> ID </th>
	 <th> Name </th>
	 <th> Cost </th>
	 <th> Size </th>
	 <th> Image </th>
	 
	  </tr>";
	for($i=0;$i<$num_result ;$i++){
		$row=$result->fetch_assoc();
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["name"]."</td>";
	  	echo "<td>".$row["cost"]."</td>";
	  	echo "<td>".$row["size"]."</td>";
	  	echo "<td><a href='../img/".$row["img"]."'> <i class='fa fa-refresh' aria-hidden='true'></i></a> </td>";
		echo "</tr>";
	}		
		echo "</table>";
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>