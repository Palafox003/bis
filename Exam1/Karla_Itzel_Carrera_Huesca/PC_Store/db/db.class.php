<?php

class Dbcon{
	private $server="localhost";
	private $user="root";
	private $pass="";
	private $db="examc3";
	private $conexion;


	public function __construct(){
		$this->con();
	}

	private function con(){
		$conn = new mysqli($this->server,$this->user,$this->pass,$this->db);
		if(mysqli_connect_errno()){
			echo "Conexion fail";
			exit;
		}else{
			$this->conexion=$conn;
			echo "conexion success.<br>";                                                 
		}
	}

	public function insert($table,$values){
		$query="insert into $table values($values)";
			$result=$this->conexion->query($query);
			if($result){
				echo " insert success.<br>";
			}else{
				echo " insert fail.<br>";
			}
	}

}
?>