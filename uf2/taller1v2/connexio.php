<?php 
function conectaDb() {
	try {
		$db = new PDO("mysql:host=localhost;dbname=pelis", "root", ""); 
		$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); 
		// Indicamos que queremos los errores en modo excepcion
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
		//Indicamos que queremos utf8
		$db->exec("SET CHARACTER SET UTF8");
		return($db);
	} 
	catch (PDOException $e) {
		die("Error de conexión:" . $e->getMessage());
	} 
}
?>