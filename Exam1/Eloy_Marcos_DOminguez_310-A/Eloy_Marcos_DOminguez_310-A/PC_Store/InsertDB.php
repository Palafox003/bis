<!DOCTYPE html>
<html>
<head>
	<title>PC_Store</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>


<body>
<!-- Start navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PC_Stroe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">user</a>
      </li>
     
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- Finish navbar-->

<!-- Start Table-->
<div class="container-fluid">
    <h1 align="center">Hello Customer Make your order!</h1>

   
    <div class="row">
      <div class="col 1"></div>
      <div class="col 1">


<form   method ="post">
	<label>Name:</label><br>
	<input type="text" name="name"><br>
	<label>Lastname</label><br>
	<input type="text" name="lastname"><br>
	<label>phone</label><br>
	<input type="text" name="phone"><br>
	<label>Product</label>
	 <select name="product" >
		<option value="0" >select</option>
		<option value="1" >Cellphone</option>
		<option value="2" >Camera</option>
		<option value="3" >USB</option>
	
	</select><br>
	<input type="submit" name="b1"><br>
</form>
<!-- Finish table-->

<?php

require_once("db/db.class.php");
	@$name=$_POST["name"];
	@$lastname=$_POST["lastname"];
	@$phone=$_POST["phone"];
	@$product=$_POST["product"];



	$db=new DbCon();
	if(@$_POST["b1"]){

	
		$db->insert("user","'null','$name','$lastname','$phone','$product'");
	}

?>










<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>