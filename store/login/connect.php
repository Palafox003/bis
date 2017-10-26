<?php
session_start();

require_once("../db/class.db.php");

if(!isset($_SESSION["online"])){
	$email=$_POST["email"];
	$pass=$_POST["pass"];

	$con=new Db();
		$result=$con->search("*","users","mail='$email' and pass='$pass'");
			$num_result=$result->num_rows;
				if($num_result==1){
					echo "User Conected.<br>";
					$_SESSION["online"]=$email;
					echo "<script>location.href='../'</script>";
				}else{
					echo "User unregistered. <br>";
				}
}else{
	echo "You're online.<br>";
	echo "<a href='close.php'>Logout</a>";
}
?>