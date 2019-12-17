<?php
$x=$_POST['email'];
require('validaciones.php');
if (valida_email($x)){
	echo "OK";
}


?>