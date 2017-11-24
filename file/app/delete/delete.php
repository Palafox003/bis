<?php
require_once("../../db/db.class.php");

	$con=new DbCon();
		$id=$_POST["id"];

		echo $id;

	$con->delete("img", "id=$id");
?>