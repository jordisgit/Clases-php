<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	
	$con =new mysqli('localhost', 'root', 'root', 'prova');

 	if ($con->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error); exit();
	}
	else {

		$consulta= $con->prepare("SELECT * FROM USUARIOS where user=?");

		$consulta->bind_param("s", $valor1);

		$valor1 = $_POST['usu'];


		$consulta->execute(); 
		$consulta->bind_result($x, $y); 

		$valor2= $_POST['contra'];
		while ($consulta->fetch()) {
			$ok=password_verify($valor2, $y);
			echo $ok;
		}
		
	
	}


?>
</body>
</html>