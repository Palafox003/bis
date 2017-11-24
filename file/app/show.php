<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<body>
<div id="resultado"></div>
<?php
require_once("../db/db.class.php");
	
$con=new DbCon();
	
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
	 <th> Delete </th>
	 
	  </tr>";
	for($i=0;$i<$num_result ;$i++){
		$row=$result->fetch_assoc();
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["name"]."</td>";
	  	echo "<td>".$row["cost"]."</td>";
	  	echo "<td>".$row["size"]."</td>";
	  	echo "<td><a href='../img/".$row["img"]."'> <i class='fa fa-refresh fa-2x' aria-hidden='true'></i></a> </td>";
	  	echo "<td>
	  			<div id='".$row["id"]."' class='hand'>
	  				<i class='fa fa-trash-o fa-2x' aria-hidden='true'></i>
	  			</div>
	  		  </td>";

		echo "</tr>";
	}		
		echo "</table>";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/show.js"></script>
</body>
</html>