<?php namespace App\Controllers;
use App\Models\PeliculaModel;

class Pelicula extends BaseController{
	public function __construct(){
		helper('form');
	}

	public function formulari(){
		echo view('head');
		echo view('header');
		echo view('form_pel');
	}

	public function index(){
        $p = new PeliculaModel();
        $result = $p -> findAll();
		echo view('head');
		echo view('header');
        echo view('peliculaV', array('datos'=>$result)); 
	}

	public function guardar() {
		$datos=\Config\Services::request();
		$id = $datos->getPostGet('id');
		$tit = $datos->getPostGet('titulo');
		$any = $datos->getPostGet('anyo');
		$pun = $datos->getPostGet('puntu');
		$vot = $datos->getPostGet('votos'); 
		$p = new PeliculaModel();
		$data=array(
			'ID'=>$id,
			'TITULO'=>$tit,
			'ANYO'=>$any,
			'PUNTUACION'=>$pun,
			'VOTOS'=>$vot
		);
		/*if ($p->insert($data)==false){
			var_dump($p->errors());
		}*/
		if ($p->insert($data)) {
			$result = $p -> findAll();
			echo view('head');
			echo view('header');
			echo view('peliculaV', array('datos'=>$result)); 
		} 
		else {
			var_dump($p->errors());
		}

	}

}
?>