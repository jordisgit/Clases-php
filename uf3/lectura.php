<?php 
$fichero=fopen('prueba.txt', 'r');
while (!feof($fichero)) {
	$linea = fgets($fichero);
	echo($linea);
}
fclose($fichero);
?>

