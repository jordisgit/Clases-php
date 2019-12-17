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

		$consulta= $con->prepare("INSERT INTO USUARIOS (user, password) VALUES (?,?)");

		$consulta->bind_param("ss", $valor1, $valor2);

		$valor1 = $_POST['usu'];
		$x = $_POST['contra'];
		$valor2 = password_hash($x, PASSWORD_DEFAULT);

		$consulta->execute(); 

		//$con->query("INSERT INTO USUARIOS (user, password) VALUES ('$valor1','$valor2')");
		//echo "insertados: ". $con->affected_rows();
	
	}


?>
</body>
</html>