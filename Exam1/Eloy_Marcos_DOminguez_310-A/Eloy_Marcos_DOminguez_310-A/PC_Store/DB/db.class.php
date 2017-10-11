<?php
class DbCon{
	private $server="localhost";
	private $user="root";
	private $pass="";
	private $db="exam";
	private $conexion;

	public function __construct(){
		$this->con();
	}

	private function con(){
		$conn=new mysqli($this->server,$this->user,$this->pass,$this->db);
		if(mysqli_connect_errno()){
			echo '<h3><font color="red">Conexion fail.<br>';
			exit;
		}else{
			$this->conexion=$conn;
			echo "<h3>Conexion success.<br>";

		}
	}
	public function insert($table,$values){
		$query="insert into $table values($values)";
		$result=$this->conexion->query($query);
		if($result){
			
			echo "Insert succes <br>";
		}else{
			echo '<h3><font color="red">Insert fail.<br>';
		}

	}
}
?>