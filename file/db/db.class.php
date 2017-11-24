<?php
class DbCon{
	private $server="localhost";
	private $user="root";
	private $pass="";
	private $db="bis2";
	private $conexion;

public function __construct(){
	$this->con();
}

	private function con(){
		$conn=new mysqli($this->server,$this->user,$this->pass,$this->db);
	if(mysqli_connect_errno()){
		echo "Conection fail.<br>";
		exit;
	}else{
		$this->conexion=$conn;
		echo "Conection success.<br>";
		}

	}
	public function insert($table,$values){
		$squery="insert into $table values($values)";
		//echo $squery;
		$result=$this->conexion->query($squery);
		if($result){
			echo "Insert success.<br>";
		}else{
			echo "Insert fail.<br>";
		}
	}
	public function search($columns, $table,$condicion){
		$query="select $columns from $table where $condicion";
		 	$result=$this->conexion->query($query);
		 	return $result;
	}
	public function delete($table,$condicion){
		$query="delete from $table where $condicion";
		 	$result=$this->conexion->query($query);
		 	return $result;if($result){
					echo "Success.<br>";
				}else{
					echo "Fail.<br>";
				}
	}		
}
?>