<?php 
//$con=mysqli_connect('localhost','root','','pelis');
$con =new  mysqli('localhost','root','','pelis'); 

//$resultado = mysqli_query($con, "SELECT * FROM PELICULA limit 1,10");
$resultado = $con->query("SELECT * FROM Actor limit 1,10");


//while ($fila = mysqli_fetch_array($resultado)) { 
while ($fila = $resultado->fetch_array()) { 
	echo  $fila[0] .  $fila["1"] . "<br />";
}
?>

