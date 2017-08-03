
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
	echo "<table border = '1'>";
	echo "<th>Numero</th><th>No. Orden</th><th>CLiente</th><th>Cantidad</th><th>Color</th><th>Categoria</th><th>Proceso</th><th>Observaciones</th>";
		foreach ($respuesta as $fila => $columna): 
			?>

		<tr>	
		<td><?php echo $no; ?></td>
		<td><?php echo $columna['numOrden'] ?></td>
		<td><?php echo $columna['nombre']?></td>
		<td><?php echo $columna['cantidad'] ?></td>
		<td><?php echo $columna['color']?></td>
		<td><?php echo $columna['categoria'] ?></td>
		<td><?php echo $columna['proceso']?></td>
		<td><?php echo $columna['observaciones']?></td>
		</tr>
  <?php 
     $no++;
  endforeach;
   echo '<br />';
    echo "</table>";
 


}

}//END CLASS
//echo '<tr><td>'.$no.'<td>'.$columna['numOrden'].'</td><td>'.$columna['nombre'].'</td></tr>';

 ?>