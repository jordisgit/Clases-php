<div> 
<h2>Llistat de pel.lícules </h2>
<table>
    <tr>
        <th>Id</th>
        <th>Títol</th>
        <th>Any</th>
        <th>Puntuació</th>
        <th>Vots</th>
    </tr>
<?php 
    foreach ($datos as $peli){
        echo "<tr><td>". $peli['ID'] . "</td>"; 
        echo "<td>". $peli['TITULO'] . "</td>"; 
        echo "<td>". $peli['ANYO'] . "</td>"; 
        echo "<td>". $peli['PUNTUACION'] . "</td>"; 
        echo "<td>". $peli['VOTOS'] . "</td> </tr>"; 
    }
?>
</table>
</div>