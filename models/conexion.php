<?php class Conexion{

	
	private $servidor = "localhost";  
	private $bd = "dbsecados";
	private $usuario = "root";
	private $password = "";
	private $conexion;

	public function getConexion(){
		return $this->conexion;
	}

	public function getServidor(){
		return $this->servidor;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function getBD(){
		return $this->bd;
	}

	public function ConexionBD(){
		$this->conexion = mysqli_connect($this->servidor,
			$this->usuario,$this->password,$this->bd);
		return $this->conexion;
	}

	public function conectar(){

		$conexion = new PDO("mysql:host=localhost;dbname=dbsecados","root","");
		//var_dump($conexion);
		return $conexion;
		

	}

	

}
