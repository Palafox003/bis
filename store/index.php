<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Super shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">PRETTY GAL</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Shop</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Sale</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Costumer Care</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Stockists</a>
	      </li>
	    </ul>
	    <ul class="navbar-nav mr-auto">
<?php 
	if(isset($_SESSION["online"])){
	echo '<li class="nav-item">
	        <a class="nav-link" href="login/close.php"> Hola '.$_SESSION["online"].'</a>
	      </li>';
	}else{
		echo '<li class="nav-item"><a class="btn btn-primary" href="login/" role="button">Login</a></li>';
	}
?>
	</ul>
	  </div>
	</nav><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="jumbotron">
					<div id="container-jumbotron">
					  <h1 class="display-3">FALL & WINTER</h1>
					  <p class="lead">
					    <a class="btn btn-dark btn-lg" href="#" role="button">Shop Now</a>
					  </p>		  						
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col text-cont">
				<h1 class="display-3 text-center">YEAR ROUND</h1>
				<p class="text-center">___</p>
				<h4 class="display-4 text-center">Must Have Items</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col">
				<div class="frame-img">
					<img src="img/img2.jpg" class="img-fluid img-cat">
				</div>
				<p class="title-cat">Children</p>
			</div>
			<div class="col">
				<div class="frame-img">
					<img src="img/img4.jpg" class="img-fluid img-cat">
				</div>
				<p class="title-cat">Women</p>
			</div>
			<div class="col">
				<div class="frame-img">
					<img src="img/img32.jpg" class="img-fluid img-cat">
				</div>
				<p class="title-cat">Men</p>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
<!-- Just an image -->
<nav class="navbar">
  <div class="container">
  	<div class="row">
  		<div class="col">
  			<p>STAY CONNECTED</p>
  		</div>
  		<div class="col">
  			<p>BE OUR FRIEND</p>
  		</div>
  		<div class="col">
  			<p>NEED ASSISTANCE?</p>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col">
  			<p>2017 created by Palafox</p>
  		</div>
  	</div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>