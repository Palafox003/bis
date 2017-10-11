<?php

//connection datbase//
	$server="localhost";
	$user="root";
	$pass="";
	$db="examweb";

	$conection = new mysqli($server,$user,$pass,$db)
	or die ("error in the conection");
	//mysql_select_db($db,$conection) or die("database not found");//


	
$consult= "SELECT * FROM products";
$result=$conection->query($consult);
?>

<!DOCTYPE>
<html>
<head>
	<title>consult student</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="css/stilos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>result</title>
</head>
<body>
<!---start nav bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php" id="var"> EXAM1 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexinsert.php">insert</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consult.php">Consult</a>
      </li>
     
    </ul>
  </div>
</nav>
<!---end nav bar-->
	
	<br>
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title"> consult products </h1>
					</div>	
					<div class="panel-body">
						<table class="table table-bordered table-striped">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>PRICE</th>
							<th>SIZE</th>
							<
						</tr>
					
	
				

		<?php 
		while ($resultproducts=$result->fetch_array(MYSQLI_BOTH)) 
		{
			echo'<tr>
				 <td>'. $resultproducts['id'].'</td>
				 <td>'. $resultproducts['name'].'</td>
				 <td>'. $resultproducts['price'].'</td>
				 <td>'. $resultproducts['size'].'</td>
				
				
				 </tr>';	


			 
		}


		?>
		</table>
				</div>
			</div>
		</div>
	</div>
</section>
<center>	
<a href="indexinsert.php" class="btn btn-primary">Back Insert</a>
</center>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/gallery.js" ></script>
</body>
</html>