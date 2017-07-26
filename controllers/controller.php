<?php 

<<<<<<< HEAD
class ClcController{

public function produccion(){

	if (isset($_POST['numeroOrden']) ) {

		echo $_POST['numeroOrden'];
			}
}

}

 ?>

=======
class MvcControllers{

	//	MANDA LLAMAR A LA VISTA LOGIN
	public function login(){

		include "views/login.php";

	}

	//MANDA A LLAMAR A LA PLANTILLA
	public function plantilla(){

		include "../template.php";

}

//INTERACCION DEL USUARIO CON LAS PAGINAS
public function enlacesPaginasController(){

	if (isset($_GET['action'])) {
		$enlacesController = $_GET['action'];
	}
	else{
		$enlacesController = 'principal';
	}

	$respuesta = EnlacesPaginas::EnlacesPaginasModel($enlacesController);

	include_once $respuesta;


	
}
		
		
	}	

	





 ?>
>>>>>>> origin/master
