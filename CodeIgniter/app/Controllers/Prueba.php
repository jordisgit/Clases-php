<?php namespace App\Controllers;

class Prueba extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
    public function saluda(){
        echo "Salutacions des d'un controlador";
    }
}
