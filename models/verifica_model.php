<?php 

include_once 'conexion.php';

class VerificaLogin extends Conexion{

	public function verifica($datosModel,$tabla){
		//REALIZA LA CONEXION A LA BASE DE DATOS
	
	
		
		$stmt = Conexion::conexionBD()->prepare("SELECT usuario password FROM $tabla WHERE usuario = :usuario AND administrdor = 'si'");

		$stmt->bindParam(":usuario", $datosModel['usuario'], PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetch();
	

}

}

$datosCcntroller = array('usuario' => 'admin', 'password' => 'admin');

$a = new VerificaLogin();
$a->verifica($datosCcntroller, 'usuarios');

var_dump($a);

 ?>