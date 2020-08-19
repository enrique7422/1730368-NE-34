<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', '67.205.190.251');
        define('nombre_bd', 'clinica_web');
        define('usuario', 'admin');
        define('password', '4d13c42cb75fcbe069f7e2e10a62820fe26f796b9ceeec96');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}