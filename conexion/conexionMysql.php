<?php

class conexionMysql{
    public $conexionM;
    //cambiar la base de datos
    function conectarM(){
    $host = '127.0.0.1';
    $dbname = 'snis_2019'; 
    $username = 'root';
    $password = '';
    try {
        $conexionM = mysqli_connect($host, $username, $password,$dbname);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
        return $conexionM;
    }

    public function desconectar()    {
     odbc_close( $this->$conexionM);
     echo 'Conexion a ['.$this->dbpath.'] : Terminado ';
    }
}

?>