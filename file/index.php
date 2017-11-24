<!DOCTYPE html>
<html>
<head>
	<title>Files</title>
</head>
<body>

	<form method="POST" action="app/load.php" enctype="multipart/form-data">
		<label>name:</label><br>
		<input type ="text" name="name"><br>
		<label>Cost: </label><br>
		<input type ="text" name="cost"><br>
		<label>Size:</label>
		<select name="size">
			<option value="1">Small</option>
			<option value="2">Medium</option>
			<option value="3">Large</option>			
		<label>Picture:</label>
		<input type ="file" name="picture"><br>
		<input type="submit" name="sub" value="Save">
	</form>

</body>
</html>