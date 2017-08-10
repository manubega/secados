
<?php 
//include_once '../models/model.php';

class ClcController{

public function registroProduccionController(){

	if (isset($_POST['numOrden']) && isset($_POST['clienteOrden']) && isset($_POST['cantidadOrden']) && isset($_POST['colorOrden']) && isset($_POST['categoriaOrden']) && isset($_POST['procesoOrden'])) {


	$datosController = array('numOrden' => $_POST['numOrden'],
							'nombre' => $_POST['clienteOrden'],
							'cantidad' => $_POST['cantidadOrden'],
							'color' => $_POST['colorOrden'],
							'categoria' => $_POST['categoriaOrden'],
							'proceso' => $_POST['procesoOrden'],
							'observaciones' => $_POST['observacionesOrden']);
						

			$respuesta = ClsModel::registroProduccionModel($datosController, 'orden');

		print_r($respuesta);

			}//END IF	
}

public function listaProduccionController(){

	$respuesta = ClsModel::listaProduccionModel('orden','clientes');
	//print_r($respuesta);
	echo "<br />";
	$no = 1;
	
		foreach ($respuesta as $fila => $columna): 
			$id = $columna['id_cliente'];
			?>

		<tr>	
		<td><?php echo $no; ?></td>
		<td><?php echo $columna['numOrden'] ?></td>
		<td><?php echo $columna['nombre']?></td>
		<td><?php echo $columna['cantidad'] ?></td>
		<td><?php echo $columna['color']?></td>
		<td><?php echo $columna['categoria'] ?></td>
		<td><?php echo $columna['proceso']?></td>
		<td><?php echo $columna['fecha_ingreso']?></td>
		<td><?php echo '<a href = "principal.php?action=produccion&opcion=editar&id='.$columna["id_codigo"].'"><i class = "fa fa-pencil-square-o">'?></td>
		<td><?php echo '<a href = "principal.php?action=produccion&opcion=eliminar&id='.$columna["id_codigo"].'"><i class = "fa fa-minus-square-o">'?></td>
		</tr>
  <?php 
     $no++;
  endforeach;
  
 


}//END FUNCTION

public function editarProduccionController(){

	$datosController = $_GET['id'];
	$respuesta = ClsModel::editarProduccionModel($datosController,'orden');
	if ($respuesta) {
	echo $respuesta['id_codigo'];
	echo "<br>";
	echo $respuesta['numOrden'];
	}
}//END FUNCTION

}//END CLASS
//echo '<tr><td>'.$no.'<td>'.$columna['numOrden'].'</td><td>'.$columna['nombre'].'</td></tr>';

 ?>