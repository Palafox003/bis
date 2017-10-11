<!DOCTYPE html>
<html>
<head>
	<title>Alert</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">	
</head>
<body>

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
<script type="text/javascript">
	alert("Register Succesful!!");
</script>
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
<div class="container">
  <div class="row">
    <div class="col-3"></div>
    <div class="col">
      
    </div>
  </div>
</div>
<?php  

$conexion = mysqli_connect("localhost", "root", "", "test");
mysqli_query($conexion, "INSERT INTO users(Name, Last, Pass1, Pass2, Mail) VALUES ('$_POST[name]', '$_POST[last]', '$_POST[pass1]', '$_POST[pass2]', '$_POST[mail]')");

?>