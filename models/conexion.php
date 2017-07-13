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

	public function conexionBD(){

		$this->conexion = new PDO("mysql:host={$this->servidor};dbname={$this->bd}","{$this->usuario}","{$this->password}");
		//var_dump($this->conexion);
		return $this->conexion;

	}

}

 ?>