<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
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
					<a class="nav-link" href="index.php">Home </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="menu.php">Menu <span class="sr-only">(current)</span> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="about.php">About Us</a>
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

<h1>Explore our food!</h1>

<div class="container">
	<div class="row">
		<div class="col">
			<img src="img/milanesa.jpg" title="Milanesa de pollo con enchiladas, ensalada y frijoles."  class="img-fluid img-gallery" desc="$120.00"> 
		</div>
		<div class="col">
			<img src="img/d.jpg" title="Pollo frito o asado con enchiladas, ensalada y frijoles." class="img-fluid img-gallery" desc="$95.00">
		</div>
		<div class="col">
			<img src="img/12.jpg" title="Milanesa de cerdo con enchiladas, ensalada y frijoles."  class="img-fluid img-gallery" desc="$110.00">
		</div>
	</div>
</div>
<br><br>
<div class="container">
	<div class="row">
		<div class="col">
			<img src="img/hotca.jpg" title="Milanesa de res con enchiladas o papas, ensalada, frijoles y arroz."  class="img-fluid img-gallery" desc="$120.00"> 
		</div>
		<div class="col">
			<img src="img/d.jpg" title="Tampiqueña, bistec de res, 3 enchiladas, plátanos fritos, arroz, chiles toreados, papas a la francesa y frijoles." class="img-fluid img-gallery" desc="$130.00">
		</div>
		<div class="col">
			<img src="img/12.jpg" title="Bistec de cerdo al gusto (arroz, ensalda y frijoles)."  class="img-fluid img-gallery" desc="$100.00">
		</div>
	</div>
</div>
<br><br>

<div id="gallery">
	<div class="container">
	<div class="row">
	<div class="col" id="img-big">
		
	</div>
	<div class="col">
		<h2 id="title"> </h2>
		<p id="desc"></p>
	</div>
		
		</div>	
	</div>
</div>
<br>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Caldos</th>
      <th>Sopas</th>
      <th>Filetes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Caldo de pescado. $135.00</td>
      <td>Consome de pollo con arroz. $50.00</td>
      <td>Filete empanizado. $150.00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Caldo de camaron. $135.00</td>
      <td>Sopa de mariscos. $165.00</td>
      <td>Filete al mojo de ajo. $150.00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Huatape de camarón. $135.00</td>
      <td>Sopa de pasta. $30.00</td>
      <td>Filete con camarones. $185.00</td>
    </tr>
  </tbody>
</table>
<br>
<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Camarones</th>
      <th>Cocteles</th>
      <th>Tostadas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Camarones a la diabla. $170.00</td>
      <td>Extra grande. $120.00</td>
      <td>Tostadas de camarón. $150.00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Camarones empanizados. $170.00</td>
      <td>Grande. $80.00</td>
      <td>Tostadas de pulpo. $130.00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Camarones torneados. $190.00</td>
      <td>Chico. $45.00</td>
      <td>Tostadas de ceviche. $150.00</td>
    </tr>
  </tbody>
</table>
<br><br>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/gallery.js"></script>
	
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