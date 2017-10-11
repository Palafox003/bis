<!DOCTYPE html>
<html>
<head>
	<title>Insert in DataBase</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body style="background-color:rgba(230,0,140,0.5);">

	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">PC Store</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="insertdb.php">Insert in DataBase <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
<br>

<div class="row">
	<div class="col - 1"></div>
	<div class="col">
		<form method="POST" action="app/load.php" enctype="multipart/form-data" class="form-group">
			<label for="exampleFormControlInput1">Name:</label><br>
			<input type="text" name="name" class="form-control" id="exampleFormControlInput1"><br>
			<label for="exampleFormControlInput1">LastName:</label><br>
			<input type="text" name="lastname" class="form-control" id="exampleFormControlInput1"><br>
			<label for="exampleFormControlInput1">Age:</label><br>
			<input type="text" name="age" class="form-control" id="exampleFormControlInput1"><br>
			<label for="exampleFormControlInput1">Sex:</label><br>
			<select class="form-control" id="exampleFormControlSelect1" name="sex">
				<option value="0">Select one</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select><br>
			<label>Photo</label><br>
			<input type="file" name="picture"><br>
			<input type="submit" name="sub" value="Save">
		</form>
	</div>
	<div class="col - 1"></div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>