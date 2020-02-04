<?php 
function conectaDb() {
	try {
		$db = new PDO("mysql:host=localhost;dbname=pelis", "root", "root"); 
		$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); 
		return($db);
	} 
	catch (PDOException $e) {
		print "<p>Error: No puede conectarse con la base de datos.</p>\n";
		print "<p>Error: " . $e->getMessage() . "</p>\n";
		exit();
	} 
}
?>