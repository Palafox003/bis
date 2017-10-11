<!DOCTYPE html>
<html>
<head>
	<title>PC Store 2</title>
</head>
<body>
<!--////////////////////////////////////////////////////////////////////////-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="PC_Store.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="PC_Store2.php">Add Product</a>
      </li>
    </ul>
  </div>
</nav>

</br>
</br>
<!--////////////////////////////////////////////////////////////////////////-->
<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">
			<form action="insertar2.php" method="POST" name="form">
				<div class="form-group col-md-10	">
	<label>Write The ID</label>
	<input type="text" name="name" /> </br></br>
	
	<label>Write The Name</label>
	<input type="text" name="lname" /></br></br>
	
	<label>Write The Key Product</label>
	<input type="text" name="Pkey" /></br></br>

	<label>Write The Model</label>
	<input type="text" name="model" /></br></br>

	<label>Write The Manufacter</label>
	<input type="text" name="manufacter" /></br></br>

	<input type="submit" value="insertar datos" />
</form>
		</div>
	</div>
</div>
<!--////////////////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////////////////////////////////////-->

</body>
</html>