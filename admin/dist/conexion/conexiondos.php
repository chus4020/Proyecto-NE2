<?php

class Conexion{
    public static function Conectar (){
        define('servidor','localhost');
        define('nombre_bd','dallim');
        define('usuario','root');
        define('password','');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        try{
            $conexiondos = new PDO("mysql:host".servidor.":dbname");
        }
    } 
}
?>