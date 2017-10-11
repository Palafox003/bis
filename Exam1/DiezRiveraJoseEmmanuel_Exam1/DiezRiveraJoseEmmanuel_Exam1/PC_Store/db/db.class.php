<?php

	private $server="localhost";
	private $user="root";
	private $pass="";
	private $db="pc_store";
	private $conexion;

	public function _construct(){
		$this->con();
	}

	private function con(){
		$conn=new mysqli($this->server,$this->user,$this->pass,$this->db);
		if(mysqli_connect_errno()){
			echo "Conexion fail.<br>";
			exit;
		}else{
			$this->conexion=$conn;
			echo "Conexion success.<br>";
		}
	}
	public function insert($table,$values){
		$squery="insert into $table values($values)";
		//echo $squery;
		$result=$this->conexion->query($squery);
		if($result){
			echo "Insert success.<br>";
		}else{
			echo "Insert fall.<br>";
		}
	}
	public function search($colums,$table,$condicion){
        $query="select $colums from $table where $condicion";
        $result=$this->conexion->query($query);
        return $result;
	}
}
?>