<?php
Class Peliculas_model {
	private $db;
	private $pelis;
	
	public function Peliculas_model(){
		//Todas las rutas son relativas desde index.php
		require_once("./modelo/conexion.php");
		$this->db=Conexion::conectar();
		$this->pelis=array();
	}
	public function getPelis(){
		$consulta = "SELECT * FROM pelicula";
		$result = $this->db->query($consulta);
		while ($fila=$result->fetch(PDO::FETCH_ASSOC)){
			$this->pelis[]=$fila;
		}
		return $this->pelis;
	}
}

?>