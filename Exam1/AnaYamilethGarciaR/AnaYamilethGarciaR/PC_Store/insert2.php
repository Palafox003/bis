<!DOCTYPE html>
<html>
<head>
	<title>Store</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insert2.php">Insert</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<h1>Register with us!</h1>
<br><br>
<div class="container-fluid">
  <div id="alert1" class="alert alert-danger d-none" role="alert">
   Please select one option!
  </div>
 
<form method="post">
   <div class="form-group">
	<label>Name: </label>
	<input type="text" name="name"><br>
  </div>
<div class="form-group">
	<label>Mail:</label>
    <input type="text" name="mail"><br>
     </div>
   <div class="form-group">
    <label>Cellhone:</label>
    <input type="text" name="cellphone"><br>
    </div>
    <br>
    <input type="submit" name="b1" class="btn btn-outline-primary"><br>
</form>
<?php

require_once("db/db.class.php");
    @$name=$_POST["name"];
    @$mail=$_POST["mail"];
    @$cellphone=$_POST["cellphone"];

    $db=new DbCon();
    if(@$_POST["b1"]){
    $db->insert("customer","null,'$name','$mail','$cellphone'");
}
?>

</body>
</html>