<?php class Conexion{

	

	public function conectar(){

		$conexion = new PDO("mysql:host=localhost;dbname=dbsecados","root","");
		//var_dump($conexion);
		return $conexion;
		

	}

}

/*$obj = new Conexion();
$obj->conectar();*/

 ?>