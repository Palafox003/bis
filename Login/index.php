<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php 
if(!isset($_SESSION["online"])){
?>
	<form method="post" action="login/connect.php">
		<fieldset>
			<label>User:</label><br>
			<input type="text" name="user"><br>
			<label>Password:</label><br>
			<input type="password" name="pass"><br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
<?php 
}else{
	echo "Hello ". $_SESSION["online"]. " you're online now. !!!";
	echo "<br><br>";
	echo "<a href='login/close.php'>Logout</a>";
}
?>
</body>
</html>