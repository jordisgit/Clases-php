<?php 
$fichero=fopen('profes.csv', 'r');
while (!feof($fichero)) {
	$linea = fgets($fichero);
	$vector = explode(';',$linea);
	//print_r($vector);
	echo ($vector[0] . "  --> " . $vector[1]. "<br / >"	);
}
fclose($fichero);
?>

