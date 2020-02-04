<?php
require_once 'connexio.php';

Class Peli {

	private $id;
	private $titulo;
	private $anyo;
	private $puntuacion;
	private $votos;

	function getTitulo() {
		return $this->titulo;
	}
	function getAnyo(){
		return $this->anyo;
	}

	function Peli ($id, $t,$a,$p,$v) {
		$this->id=$id;
		$this->titulo=$t;
		$this->anyo=$a;
		$this->votos=$v;
		$this->puntuacion=$p;
	}

	static function todas(){
		$pelis=array();
		$db = conectaDB();
		$consulta = "SELECT * FROM pelicula";
		$result = $db->query($consulta);
		while ($fila=$result->fetch(PDO::FETCH_ASSOC)){
			$pelis[]=$fila;
		}
		return $pelis;	

	}
	static function borrar($id){
		$db = conectaDB();
		$consulta = "Delete from pelicula where id=:x";

		$stmt = $db->prepare($consulta);
		$stmt->bindParam(':x', $id, PDO::PARAM_INT);   
		$ok=$stmt->execute();
		return $ok;
	}
}
?>