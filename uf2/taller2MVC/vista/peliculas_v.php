<?php
	echo "<table>";
	foreach ($peliculas as $actual){
	
				echo "<tr><td>".$actual[ID] . "</td><td>";
				echo $actual[TITULO] . "</td><td>";
				echo $actual[ANYO] . "</td><td>";
				echo $actual[VOTOS] . "</td><td>";
				echo $actual[PUNTUACION] . "</td></tr>";	
	
	}



?>