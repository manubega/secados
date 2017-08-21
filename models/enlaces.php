<?php 

class EnlacesPaginas{
	public function enlacesPaginasModel($enlacesModel){


	 if(	$enlacesModel == 'inicio' ||
			$enlacesModel == 'produccion' ||
			$enlacesModel == 'procesos' ||
			$enlacesModel == 'reportes' ||
	 		$enlacesModel == 'salir'){
		

			$module = "../../views/modules/".$enlacesModel.".php";
		

	}

	else if ($enlacesModel == 'principal' ) {
		$module = "../../views/modules/principal.php";
	}
	else if ($enlacesModel == 'nuevo' ) {
		$module = "../../views/modules/nuevo.php";
	}
	else if ($enlacesModel == 'tabla' ) {
		$module = "../../views/modules/vbuscar.php";
	}
	else if ($enlacesModel == 'tablanoroot'){
		$module = "../../views/modules/vbuscarnoroot.php";
	}
	else if ($enlacesModel == 'editar' ) {
		$module = "../../views/modules/editar.php";
	}
	else if ($enlacesModel == "cambio" ) {
		$module = "../../views/modules/vbuscar.php";
	}
	
	else{
		$module = "../../views/modules/principal.php";
	}
	return $module;
}
}


 ?>