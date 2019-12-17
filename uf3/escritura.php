<?php 
$fichero=fopen('prueba.txt', 'w+');
fwrite($fichero,'Hola mundo' . PHP_EOL);
fwrite($fichero,'k ase' . PHP_EOL);
fclose($fichero);
?>

