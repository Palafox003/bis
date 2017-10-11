<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body background="img/e.jpg">
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
<h1>Our products!</h1>

<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="img/desayunos.jpg" alt="First slide" width="408" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3 class="font-weight-bold text-dark">"Breakfast"</h3><br>
						<a href="desayunos.php">	<button type="button" class="btn btn-outline-primary"  >More..</button></a><br>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/Comidas.jpg" alt="Second slide" width="408" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3 class="font-weight-bold text-dark">"Foods"</h3><br>
					     	<a href="comidas.php"> <button type="button" class="btn btn-outline-primary">More..</button></a><br>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/carnes.jpg" alt="Third slide" width="408" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3 class="font-weight-bold text-dark">"Meats and more.."</h3><br>
					     	<a href="carnes.php"> <button type="button" class="btn btn-outline-primary">More..</button></a><br>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/especialidades.jpg" alt="Four slide" width="408" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3 class="font-weight-bold text-dark">"House Specialities"</h3><br>
							<a href="especialidades.php"> <button type="button" class="btn btn-outline-primary">More..</button></a><br>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/antojitos.jpg" alt="Five slide" width="408" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3 class="font-weight-bold text-dark">"Antojitos"</h3><br>
							<a href="antojitos.php"> <button type="button" class="btn btn-outline-primary">More..</button></a><br>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/postres.png" alt="Six slide" width="408" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3 class="font-weight-bold text-dark">"Desserts"</h3><br>
							<a href="postres.php"> <button type="button" class="btn btn-outline-primary">More..</button></a><br>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/bebidas.jpg" alt="Seven slide" width="408" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3 class="font-weight-bold text-dark">"Drinks"</h3><br>
							<a href="bebidas.php"> <button type="button" class="btn btn-outline-primary">More..</button></a><br>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/licuados-esquimos.jpg" alt="Eight slide" width="408" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h3 class="font-weight-bold text-dark">"Liqueurs and Esquimos"</h3><br>
							<a href="licuados.php"> <button type="button" class="btn btn-outline-primary">More..</button></a><br>
						</div>
					</div>





				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
	</div> <br>

<div class="p-3 mb-2 bg-secondary text-white" align="center">Food is prepared at the moment that you order it, we appreciate your comprehension!</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<br>
	
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