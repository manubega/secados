<?php 

include_once 'conexion.php';

class ClsModel extends Conexion{

	public function registroProduccionModel($datosModel,$tabla){
		//REALIZA LA CONEXION A LA BASE DE DATOS
	

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE numOrden = :numOrden");

		


		$stmt->bindParam(":numOrden", $datosModel['numOrden'], PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetch();
	

}

}
		/*$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(numOrden, idCliente, cantidad, color, categoria, proceso, observaciones) VALUES (:numero, :cliente, :cantidad, :color, :categoria, :proceso, :observaciones)");
		$stmt->bindParam(":numero", $datosController['numero'], PDO::PARAM_STR);
		$stmt->bindParam(":cliente", $idCliente, PDO::PARAM_STR);
		$stmt->bindParam(":cantidad", $datosController['cantidad'], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datosController['color'], PDO::PARAM_STR);
		$stmt->bindParam(":categoria", $datosController['categoria'], PDO::PARAM_STR);
		$stmt->bindParam(":proceso", $datosController['proceso'], PDO::PARAM_STR);
		$stmt->bindParam(":numOrden", $datosController['numero'], PDO::PARAM_STR);*/

$datosController = array('numOrden' => 'nm45');
$a = new ClsModel();
$b = $a->registroProduccionModel($datosController, 'servicio');
var_dump($b);
?>