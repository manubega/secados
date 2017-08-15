<?php 

include_once 'conexion.php';

class ClsModel extends Conexion{

	public function registroProduccionModel($datosModel,$tabla){
		//REALIZA LA CONEXION A LA BASE DE DATOS
	

		$stmt = Conexion::conectar()->prepare("SELECT id_codigo, nombre FROM orden WHERE id = :id");

		$stmt->bindParam(":id", $datosModel['id'], PDO::PARAM_INT);
		$stmt->execute();
		if($row = $stmt->fetch(PDO::FETCH_NUM)){
			$datoID = $row['0'];
			$datoNombre = $row['1'];
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(numOrden, id_cliente,nombre,cantidad,color,categoria,proceso,observaciones) VALUES (:numOrden, :id_cliente, :nombre, :cantidad, :color, :categoria, :proceso, :observaciones)");
		$stmt->bindParam(":numOrden", $datosModel['numOrden'], PDO::PARAM_STR);
		$stmt->bindParam(":id_cliente", $datoID, PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datoNombre, PDO::PARAM_STR);
		$stmt->bindParam(":cantidad", $datosModel['cantidad'], PDO::PARAM_INT);
		$stmt->bindParam(":color", $datosModel['color'], PDO::PARAM_STR);
		$stmt->bindParam(":categoria", $datosModel['categoria'], PDO::PARAM_STR);
		$stmt->bindParam(":proceso", $datosModel['proceso'], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datosModel['observaciones'], PDO::PARAM_STR);

		if($stmt->execute()){
			return 'EXITO';
			$stmt->close();
		}//END IF

		else{
			return 'ERROR';
			$stmt->close();

		
		}//END ELSE



		}

}//END FUNCTION
//SELECCIONA LOS DATOS DE LA TABLA orden y clientes 

public function listaProduccionModel($tabla,$tabla2){

	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla, $tabla2 WHERE clientes.id_cliente = orden.id_cliente ORDER BY fecha_ingreso DESC ");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->close();
}//END FUNCTION

public function editarProduccionModel($datosModel,$tabla1){

	$stmt = Conexion::conectar()->prepare("SELECT id_codigo, id_cliente, nombre, numOrden, cantidad, color, categoria, proceso, observaciones, fecha_ingreso FROM $tabla1 WHERE id_codigo = :id_codigo");
	$stmt->bindParam(":id_codigo", $datosModel, PDO::PARAM_INT);
	$stmt->execute();
	 return $stmt->fetch();

	  	
	  }//END

	  public function actualizarProduccionModel($datosModel,$tabla){

	  }
	  


}//END CLASS

/*$datosController = array('numOrden' => 'WR44',
						 'nombre' => 'MANUEL',
						 'cantidad' => '100',
						 'color' => 'VERDE',
						 'categoria' => 'LADO',
						 'proceso' => 'DESVENADO',
						 'observaciones' => 'comentario89');
$a = new ClsModel();
$b = $a->listaProduccionModel('orden', 'clientes');
//var_dump($b);
$no = 1;
foreach ($b as $fila => $columna) {
    echo $no . '- ' . $fila . ' => ' . $columna['numOrden'] .' => '. $columna['nombre'];
    echo '<br />';
    $no++;
}*/

?>