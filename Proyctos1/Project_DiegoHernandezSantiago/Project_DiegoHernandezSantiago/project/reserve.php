<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
</head>
<body id="body2" background="img/e.jpg">
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
<h1>Reserve now!</h1>
<div id="alert1" class="alert alert-danger d-none" role="alert">
   Please select one option!
  </div>
      <form method="post" action="app/load.php" enctype="multipart/form-data">
 <div class="container-fluid">
    <label>Nombre:</label>
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
        <input type="text" name= "name" required class="form-control" id="name" placeholder="Juan Perez">
      </div>

  <label>Teléfono:</label>
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
        <input type="text" name= "cellphone" required class="form-control" id="cellphone" placeholder="784 114 78 98">
      </div>
  
      <label>E-mail:</label>
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
        <input type="email" name= "mail" required class="form-control" id="mail" placeholder="juanperez@gmail.com">
      </div>

  <div class="row">
     <div class="col-sm-4">
      <div class="form-group">
      <label>Fecha:</label>
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></span>
        <input id="rest-datepicker" type="text" name= "date" class="form-control hasDatepicker" placeholder="2017-10-23" value="">
      </div>
     </div>

  </div>
   <div class="col-sm-4">
   <label>Hora:</label>
    <select type="text" name="hour" class="form-control">
    
                        <option value="09:00">09:00</option>
                  <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                  <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
              </select>
</div>
  <div class="col-sm-4">
    <label>Personas:</label>
    <select type="text" name="people" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="Más de 10">Más de 10</option>
    </select>
</div>
    </div>

  <div class="form-group">
    <label>Comentarios:</label>
    <div class="input-group">
      <span class="input-group-addon" style="vertical-align: top"><span class="glyphicon glyphicon-comment"></span></span>
      <textarea class="form-control" type="text" name="observations"></textarea>
    </div>
  </div>

  <input type="submit" name="b1" class="btn btn-outline-primary"><br>

</form>
</div>

<?php
require_once("db/db.class.php");
    @$name=$_POST["name"];
    @$cellphone=$_POST["cellphone"];
    @$mail=$_POST["mail"];
    @$date=$_POST["date"];
    @$hour=$_POST["hour"];
    @$people=$_POST["people"];
    @$observations=$_POST["observations"];

    $db=new DbCon();
    if(@$_POST["b1"]){
    $db->insert("book","null,'$name','$cellphone','$mail','$date','$hour','$people','$observations'");
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