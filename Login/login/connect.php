<?php
session_start();

require_once("../db/class.db.php");

if(!isset($_SESSION["online"])){
	$user=$_POST["user"];
	$pass=$_POST["pass"];

	$con=new Db();
		$result=$con->search("*","users","user='$user' and pass='$pass'");
			$num_result=$result->num_rows;
				if($num_result==1){
					echo "User Conected.<br>";
					$_SESSION["online"]=$user;
				}else{
					echo "User unregistered. <br>";
				}
}else{
	echo "You're online.<br>";
	echo "<a href='close.php'>Logout</a>";
}
?>