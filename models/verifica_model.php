<?php 

include_once 'conexion.php';

class VerificaLogin extends Conexion{

	public function verifica($datosModel,$tabla){
		//REALIZA LA CONEXION A LA BASE DE DATOS
	
<<<<<<< HEAD
<<<<<<< HEAD
		$stmt = Conexion::conectar()->prepare("SELECT  usuario, password, administrador, nombre FROM $tabla WHERE usuario = :usuario");
=======
		$stmt = Conexion::conectar()->prepare("SELECT  usuario, password, administrador FROM $tabla WHERE usuario = :usuario");
>>>>>>> origin/master
=======
		$stmt = Conexion::conectar()->prepare("SELECT  usuario, password, administrador FROM $tabla WHERE usuario = :usuario");
>>>>>>> origin/master

		$stmt->bindParam(":usuario", $datosModel['usuario'], PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetch();
	

}

}


/*$datosController = array('usuario' => 'admin', 'password' => 'admin');

$a = new VerificaLogin();
$b = $a->verifica($datosController, 'usuarios');
var_dump($b['administrador'])*/



 ?>