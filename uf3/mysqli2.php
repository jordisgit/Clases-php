<?php 




//$con=mysqli_connect('localhost','root','','pelis');
$con =new  mysqli('localhost','root','','pelis'); 

//$resultado = mysqli_query($con, "SELECT * FROM PELICULA limit 1,10");
//$resultado = $con->query("SELECT * FROM Actor limit 1,10");
$consulta= $con->prepare("SELECT id, titulo FROM pelicula WHERE id<= ?");

$consulta->bind_param("i", $valor1);
$valor1=18;
$consulta->execute();

$consulta->bind_result($id, $titulo);
while ($consulta->fetch()) {
	echo $id . " " . $titulo . "<br />";
}

?>

