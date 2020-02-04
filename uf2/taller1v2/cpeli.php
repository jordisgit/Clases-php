<?php

require ('Peli.php');

if (isset($_GET['a'])){
    $a=$_GET['a'];
    if ($a==1){
        $id=$_GET['id'];
        $vale=Peli::borrar($id);
        if ($vale==1){
            echo "pelicula borrada";
            echo "<a href='index.php'>Volver</a>";
        }
    }
}
else {
    $peliculas=Peli::todas();
    echo "<h1> Listado de pelis</h1>";  
    echo "<table>";
    foreach ($peliculas as $actual){
                echo "<tr><td>".$actual["ID"] . "</td><td>";
                echo  $actual["TITULO"] . "</td><td>";
                echo $actual["ANYO"] . "</td><td>";
                echo $actual["VOTOS"] . "</td><td>";
                echo $actual["PUNTUACION"] . "</td><td>";	
                echo "<a href='cpeli.php?a=1&id=".$actual["ID"]."'>Borrar</a></td><td>";
                echo "<a href='mpeli.php?id=".$actual["ID"]."&t=". $actual["TITULO"]."&a=".$actual["ANYO"] . "&v=". $actual["VOTOS"]. "&p=". $actual["PUNTUACION"]."'>Modificar</a></td></tr>";
        
    }
    echo "</table>";

}

?>