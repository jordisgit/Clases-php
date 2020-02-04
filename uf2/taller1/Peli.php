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

	function Peli ($id) {

		$db = conectaDB();
		$consulta = "SELECT * FROM PELICULA where ID=".$id;
		$result = $db->query($consulta);
		if (!$result) {
			print "<p>Error en la consulta.</p>\n";
		} 
		else {
			foreach ($result as $valor) {
				$this->id=$id;
				$this->titulo=$valor[TITULO];
				$this->anyo=$valor[ANYO];
				$this->votos=$valor[VOTOS];
				$this->puntuacion=$valor[PUNTUACION];
			}
		}

		$db = null;

	}

}
?>