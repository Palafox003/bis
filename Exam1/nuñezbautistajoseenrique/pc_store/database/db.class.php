<?php 
class DbCon{
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
            echo "Conexion fail.<br>";
            exit;
        }else{
            $this->conexion=$conn;
            echo "Conexion success.<br>";
        }
    }

    public function insert($table,$values){
        $query="insert into $table value($values)";
        //echo $query;
            $result=$this->conexion->query($query);
            if($result){
                echo "insert success.<br>";
            }else{
                echo "Insert fail.<br>";
            }
    }
    public function search($columns,$table,$condicion){
        $query="select $columns from $table where $condicion";
        $result=$this->conexion->query($query);
        return $result;

    }
}
?>