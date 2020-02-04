<?php
class Conexion {

	public static function conectar(){
		// Lo declaramos static porqué así no
		// hace falta tener ninguna instancia de la 
		// clase conexión, ya que los métodos static
		// son de la clase y no de los objetos
		try {
			$db = new PDO("mysql:host=localhost;dbname=pelis", "root", "root"); 
				// Indicamos que queremos los errores en modo excepcion
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Indicamos que queremos utf8
			$db->exec("SET CHARACTER SET UTF8");
		}
		catch(Exception $e){
			die("Error de conexión:" . $e->getMessage());
		}
		return $db;

	}


}

?> 