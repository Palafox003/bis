<!DOCTYPE html>
<html>
<head>
	<title>XD2</title>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Home </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Products.php">Products <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">

        <a  class="nav-link" href="search.php"><img src="img2/search.png" width="25" height="25"></a>
      </li> 
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
    <img src="img/LOGO.png" width="50" height="50">
  </form>
</nav><br>
<br>
<br>
<br>




<?php
 //inlude("conexion.php");  
require_once("conexion.php");

	$con=mysql_connect($host,$user,$pw);
	mysql_select_db($db,$con);
	mysql_query("INSERT INTO codigof (name,lastname,password,confirmpassword,email) VALUES ('$_POST[name]','$_POST[lastname]','$_POST[password]','$_POST[confirmpassword]','$_POST[email]')",$con);
			echo "Datos Insertados";	

?>

</body>
</html>