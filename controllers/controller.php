
<?php 
include_once '../models/model.php';

class ClcController{

public function registroProduccionController(){

	if (isset($_POST['numeroOrden']) && isset($_POST['clienteOrden']) && isset($_POST['cantidadOrden']) && isset($_POST['colorOrden']) && isset($_POST['categoriaOrden']) && isset($_POST['procesoOrden'])) {


	$datosController = array('numero' => $_POST['numeroOrden'],
							'cliente' => $_POST['clienteOrden'],
							'cantidad' => $_POST['cantidadOrden'],
							'color' => $_POST['colorOrden'],
							'categoria' => $_POST['categoriaOrden'],
							'proceso' => $_POST['procesoOrden'] );

			$respuesta = ClsModel::registroProduccionModel($datosController, 'servicio');

		echo $respuesta;

			}//END IF	
}

}

 ?>