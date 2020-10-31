<?php
class BDSQL
{ 
    public $conexion; 
    public $total_consultas;
    
        public function BDSQL()
        { 
              if(!isset($this->conexion))
          {
                $this->conexion = (mysqli_connect("localhost","root",""));
                 mysqli_select_db($this->conexion,"dallim") or die(mysqli_connect_error());
             }
    }
  
    public function consulta($consulta){ 
      $this->total_consultas++; 
      $resultado = mysqli_query($this->conexion,$consulta);
      if(!$resultado){ 
        echo 'MySQL Error: ' . mysqli_error();
        exit;
      }
      return $resultado;
    }
    public function fetch_array($consulta){
     return mysqli_fetch_array($consulta);
    }
    public function num_rows($consulta){
     return mysqli_num_rows($consulta);
    }
    public function getTotalConsultas(){
     return $this->total_consultas; 
    }
  
  
  }

?>