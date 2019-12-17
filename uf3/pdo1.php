<?php 
function conectaDb() {
	try {
		$db = new PDO("mysql:host=localhost;dbname=prova", "root", "root"); 
		$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); 
		return($db);
	} 
	catch (PDOException $e) {
		print "<p>Error: No puede conectarse con la base de datos.</p>\n";
		print "<p>Error: " . $e->getMessage() . "</p>\n";
		exit();
	} 
}


$db = conectaDB();
$consulta = "SELECT * FROM taula1";
$result = $db->query($consulta);
if (!$result) {
	print "<p>Error en la consulta.</p>\n";
} 
else {
	foreach ($result as $valor) {
		print "<p>$valor[id] Tiene $valor[nom]</p>\n";
	}
}

$db = null;

?>

