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
	else{
		$module = "../../views/modules/principal.php";
	}
	return $module;
}
}

 ?>