<?php
class DBCon{
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
			echo "Conexion fall.<br>";
			exit;
		}else{
            $this->conexion=$conn;
            echo "Conexion success.<br>";
		}
	}
	public function insert($table,$values){
		$query="insert into $table values($values)";
		$result=$this->conexion->query($query);
		if($result){
			echo "Insert success.<br>";
		}else{
			echo "Insert fail.<br>";
		}
	}
}
?>