<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body  id="body2" background="img/e.jpg">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="#"><img src="img/logo12.png" width="30" height="30" class="d-inline-block align-top" alt="">
		Las delicias del mar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="menu.php">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="about.php">About Us<span class="sr-only">(current)</span> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="contact.php">Contact</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						More
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="gallery.php">Gallery</a>
						<a class="dropdown-item" href="reserve.php">Reserve</a>
						<a class="dropdown-item" href="rating.php">Rating</a>
					</div>
			</ul>
			
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
<h1>Evaluate us!</h1>
	<div class="container-fluid">
	<div id="alert1" class="alert alert-danger d-none" role="alert">
 	 Please select one option!
	</div>
	<div class="row">
		<div class="col-2"></div>
		<div class="col">
			
<form method="post" action="app/load2.php" enctype="multipart/form-data">
 <div class="container-fluid">
    <label>Name:</label>
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
        <input type="text" name= "name" required class="form-control" id="nombre" placeholder="Juan Perez">
      </div>
  
      <label>E-mail:</label>
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
        <input type="email" name= "email" required class="form-control" id="email" placeholder="juanperez@gmail.com">
      </div>
 
   <label>Sex:</label>
    <select type="text" name="sex" class="form-control">
                  <option value="0">Select one option</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
              </select>

    <label>Age:</label>
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
        <input type="age" name= "age" required class="form-control" id="age" placeholder="18">
      </div>

    <label>Rate this restaurant:</label>
    <select type="text" name="rate" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    

  <div class="form-group">
    <label>Opinion:</label>
    <div class="input-group">
      <span class="input-group-addon" style="vertical-align: top"><span class="glyphicon glyphicon-comment"></span></span>
      <textarea class="form-control" type="text" name="opinion"></textarea>
    </div>
  </div>

  <input type="submit" name="b1" class="btn btn-outline-primary"><br>

</form>
</div>
</div>
		<div class="col-2"></div>
	</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/contact.js"></script><br>

<?php
require_once("db/db.class.php");
    @$name=$_POST["name"];
    @$email=$_POST["email"];
    @$sex=$_POST["sex"];
    @$age=$_POST["age"];
    @$rate=$_POST["rate"];
    @$opinion=$_POST["opinion"];

    $db=new DbCon();
    if(@$_POST["b1"]){
    $db->insert("customer","null,'$name','$email','$sex','$age','$rate','$opinion'");
}
?>
<br><br><br>


</body>

	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
	<div class="icons"> 
	&nbsp; &nbsp;
			<a href="https://www.facebook.com/antoniovazqu1/"><img src="img/face2.png" width="40" height="40"></a>
	&nbsp; &nbsp; 
		<a href="https://www.instagram.com/?hl=es"><img src="img/insta2.png" width="50" height="50"></a>	
	&nbsp; &nbsp; 
			<a href="https://twitter.com/login?lang=es"><img src="img/tw2.png" width="40" height="40""></a>	
	&nbsp; &nbsp; 
			<a href="https://www.youtube.com/?gl=MX&hl=es-419"><img src="img/you.png" width="40" height="40"></a>	
	&nbsp; &nbsp; 
			<a href="https://es.wikipedia.org/wiki/Tecolutla"><img src="img/t.png" width="35" height="35"></a>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 
		</div>	
		<br>Avenida Vicente Guerrero Esquina Juan Ahumada S/N Tecolutla Ver., Mexico. || 784 112 33 33 || 766 145 78 98
        </br>
		</nav>
</html>