<?php
class DbCon {
	private $server="localhost";
	private $user="root";
	private $pass="";
	private $db="pc_store";
	private $conexion;

	public function __construct(){
		$this->con();
	}

	private function con(){
		$conn=new mysqli($this->server,$this->user,$this->pass,$this->db);
		if(mysqli_connect_errno()){
			echo "Conexion Fail<br>";
			exit;
		}else{
			$this->conexion=$conn;
			echo "Conexion Success<br>";
		}
	}

	public function insert($table,$values){
		$query="insert into $table value($values)";
			$result=$this->conexion->query($query);
			if($result){
				echo "Insert Success.<br>";
			}else{
				echo "Insert Fail.<br>";
			}
	}

	public function search($colums,$table,$condicion){
		$query="select $colums from $table where $condicion";
		$result=$this->conexion->query($query);
		return $result;

	}

}
?>