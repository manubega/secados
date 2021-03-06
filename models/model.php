<?php 
include_once 'conexion.php';

class ClsModel extends Conexion{

	public function registroProduccionModel($datosModel,$tabla){
		//REALIZA LA CONEXION A LA BASE DE DATOS
	

		$stmt = Conexion::conectar()->prepare("SELECT id_cliente, nombre FROM clientes WHERE nombre = :nombre");

		$stmt->bindParam(":nombre", $datosModel['nombre'], PDO::PARAM_STR);
		$stmt->execute();
		if($row = $stmt->fetch(PDO::FETCH_NUM)){
			$datoID = $row['0'];
			$datoNombre = $row['1'];
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(numOrden, id_cliente,nombre,cantidad,tipo_piel,color,categoria,proceso,observaciones) VALUES (:numOrden, :id_cliente, :nombre, :cantidad, :tipo, :color, :categoria, :proceso, :observaciones)");
		$stmt->bindParam(":numOrden", $datosModel['numOrden'], PDO::PARAM_STR);
		$stmt->bindParam(":id_cliente", $datoID, PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datoNombre, PDO::PARAM_STR);
		$stmt->bindParam(":cantidad", $datosModel['cantidad'], PDO::PARAM_INT);
		$stmt->bindParam(":tipo", $datosModel['tipo'], PDO::PARAM_STR);
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

		}//END IF

}//END FUNCTION
//SELECCIONA LOS DATOS DE LA TABLA orden y clientes 

public function listaProduccionModel($tabla,$tabla2){

	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla, $tabla2 WHERE clientes.id_cliente = orden.id_cliente ORDER BY fecha_ingreso DESC ");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->close();
}//END FUNCTION

public function editarProduccionModel($datosModel,$tabla1){

	$stmt = Conexion::conectar()->prepare("SELECT id_codigo, id_cliente, nombre, numOrden, cantidad, tipo_piel, color, categoria, proceso, observaciones, fecha_ingreso FROM $tabla1 WHERE id_codigo = :id_codigo");
	$stmt->bindParam(":id_codigo", $datosModel, PDO::PARAM_INT);
	$stmt->execute();
	 return $stmt->fetch();

	  }//END

	  public function actualizarProduccionModel($datosModel,$tabla){

	  	$stmt = Conexion::conectar()->prepare("SELECT id_cliente, nombre FROM clientes WHERE nombre = :nombre");
		$stmt->bindParam(":nombre", $datosModel['nombre'], PDO::PARAM_STR);
		$stmt->execute();
		if($row = $stmt->fetch(PDO::FETCH_NUM)){
			$datoID = $row['0'];
			$datoNombre = $row['1'];
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET numOrden = :numOrden, id_cliente = :id_cliente, nombre = :nombre, cantidad = :cantidad, tipo_piel = :tipo_piel, color = :color, categoria = :categoria, proceso = :proceso, observaciones = :observaciones WHERE id_codigo = :id_codigo");
			$stmt->bindParam(":numOrden", $datosModel['numOrden'], PDO::PARAM_STR);
			$stmt->bindParam(":id_cliente", $datoID, PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datoNombre, PDO::PARAM_STR);
			$stmt->bindParam(":cantidad", $datosModel['cantidad'], PDO::PARAM_INT);
			$stmt->bindParam(":tipo_piel", $datosModel['tipo_piel'], PDO::PARAM_STR);
			$stmt->bindParam(":color", $datosModel['color'], PDO::PARAM_STR);
			$stmt->bindParam(":categoria", $datosModel['categoria'], PDO::PARAM_STR);
			$stmt->bindParam(":proceso", $datosModel['proceso'], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones", $datosModel['observaciones'], PDO::PARAM_STR);
			$stmt->bindParam(":id_codigo", $datosModel['id'], PDO::PARAM_INT);
			if ($stmt->execute()) {
				return 'EXITO';
			$stmt->close();
			}
			else
				echo "ERROR ERROR";
			$stmt->close();
		}

		else{
			return 'ERROR';
			$stmt->close();

		
		}//END ELSE
	  }//END FUNCTION

	  public function borrarProduccionModel($datosModel,$tabla){

	  	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_codigo = :id_codigo");
	  	$stmt -> bindParam(":id_codigo", $datosModel['idBorrar'], PDO::PARAM_INT);
	  	if ($stmt -> execute()) {
	  		return 'EXITO';
	  		$stmt -> close();
	  	}
	  	else{
	  		return 'ERROR';
	  		$stmt -> close();
	  	}


	  }//END FUNCTION
	  


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