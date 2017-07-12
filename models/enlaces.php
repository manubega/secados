<?php 

class EnlacesPaginas{
	public function enlacesPaginasModel($enlacesModel){


	 if(	
			$enlacesModel == 'produccion' ||
			$enlacesModel== 'procesos' ||
			$enlacesModel== 'reportes') {
		

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