<?php

//VAMOS A CONECTAR LA BASE DE DATOS CON NUESTRO PROYECTO

class conexion{

private $servidor="localhost";
private $usuario="root";
private $contrasena="";
private $conexion;

public function __construct(){

    try{

        //En dbname= "Nombre de nuestra base de datos"
        $this->conexion=new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasena);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){

        return "Falla de conexion".e;

    }

}

//Esta funcion es para eliminar, insertar y actualizar
public function ejecucion($sql){
$this->conexion->exec($sql);
return $this->conexion->lastInsertId();

}

public function informacion($sql){
//Esta funcion es para ver los registro de la BD
    
$sentencia=$this->conexion->prepare($sql);
$sentencia->execute();
return $sentencia->fetchAll();

}


}
?>