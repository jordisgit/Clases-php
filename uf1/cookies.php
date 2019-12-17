<?php
if (isset($_COOKIE['contador'])) {
	$x=$_COOKIE['contador'];
	$x++;
	echo "Has visitado esta web $x veces";
	setcookie('contador', $x, time()+(365*24*3600));
}
else {
	setcookie('contador',1,time()+(365*24*3600));
	echo "Has visitado esta web 1 vez";
}




?>