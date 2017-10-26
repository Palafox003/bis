<?php 
class Db{
	private $server="localhost";
	private $user="root";
	private $pass="";
	private $db="login";
	private $con;

	public function __construct(){
		$this->conectar();
	}

	private function conectar(){
		$c=mysqli_connect($this->server,$this->user,$this->pass,$this->db);
		if(mysqli_connect_errno()){
			echo "Error de conexión con la Base de dados.";
			exit;
		}else{
			$this->con=$c;
		}
	}
	public function insert($table,$values){
		$query="insert into $table values($values)";
			$result=$this->con->query($query);
			if($result){
				echo '<div class="alert alert-success" role="alert"> Datos Insertados de forma correcta. </div>';
			}else{
				echo '<div class="alert alert-danger" role="alert">
						  Error al Insertar los datos.
						</div>';
				}
	}
	public function search($colums,$table,$condition){
		$query="select $colums from $table where $condition";
			$result=$this->con->query($query);
				return $result;
	}
	public function actualizar($tabla,$datos,$condicion){
		$consulta="update $tabla set $datos where $condicion";
		echo $consulta;
			$result=$this->con->query($consulta);
				if($result){
				echo '<div class="alert alert-success" role="alert"> Datos Actualizados de forma correcta. </div>';
			}else{
				echo '<div class="alert alert-danger" role="alert">
						  Error al Actualizar los datos.
						</div>';
				}
	}

}
?>