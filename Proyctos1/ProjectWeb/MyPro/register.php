<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<!--**************************************************************-->
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
<!--**************************************************************-->
<form action="conect2.php" method="POST" name="form">
<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">
			<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="col-form-label" name="nombre">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" class="col-form-label" name="pw">LastName</label>
      <input type="text" name="last" class="form-control" id="inputPassword4" placeholder="LastName">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" class="col-form-label" >Password</label>
    <input type="text" name="pass1" class="form-control" id="inputAddress" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Confirm Password</label>
    <input type="text" name="pass2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
    <div class="form-group">
    <label for="inputAddress" class="col-form-label">E-Mail</label>
    <input type="text" name="mail" class="form-control" id="inputAddress" placeholder="E-MAIL">
  </div>
  <div class="form-row">
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary"> Create My Account! </button>
</form>
		</div>
	</div>
</div>
</form>
<!--**************************************************************-->
 <div class="container">
   <div class="row-3">
     <div class="col">
       
     </div>
   </div>
   <div class="row-1">
        <ul class="nav justify-content-end">
  <li  class="nav-item">
    <a class="nav-link active" href="info.php">Information</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="register.php">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact Us</a>
  </li>
</ul>    
   </div>
 </div>

</body>
</html>