<!DOCTYPE html>
<html>
<head>


	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
<body>
<!---start nav bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"> Kacees corp </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consult.php">Consult</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Insert
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="db.php">Insert student</a>
          <a class="dropdown-item" href="dbteacher.php">Insert teacher</a>
          
        </div>
      </li>
    </ul>
  </div>
</nav>
<!---end nav bar-->
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

<center><h1>insert</h1></center>
<form action="db/databaseteacher.php" method="POST">
  <div class="form-group">
  <label>ID Teacher</label>
  <input type="text" name="id_student" class="form-control">
  </div>

  <div class="form-group">
	<label>Name</label>
  <input type="text" name="Name" class="form-control">
  </div>

  <div class="form-group">
	<label>Last name</label>
  <input type="text" name="LastName" class="form-control">
  </div>

  <div class="form-group">
	<label>Address</label>
  <input type="text" name="Address" class="form-control">
  </div>

  <div class="form-group">
	<label>Phone</label>
  <input type="text" name="Phone" class="form-control">
  </div>

  <div class="form-group">
  <label>Genre</label>
  <select name="Genre" class="form-control">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select>
  </div>

  <div class="form-group">
	<label>Email</label>
  <input type="text" name="Email" class="form-control">
  </div>

  
	<input type="submit" value="insert"  class="btn btn-success" name="b1">

	
</form>
</div>
<div class="col-md-4"></div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>	
</body>
</html>
