<?php
$text="10 2One Number*1*";
$numero="";
$total=0;
$inside=false;
for ($i=0;$i<strlen($text);$i++){
	if ((ord(substr($text,$i,1))>=48) && (ord(substr($text,$i,1))<=57)) {
		if ($inside==true){
			$numero = $numero . substr($text,$i,1);
		}
		else {
			$numero = substr($text,$i,1);
			$inside=true;
		}	
	}
	else {
		if ($inside==true) {
			$total=$total + (int)$numero;
			$inside=false;
		}
	}
}
echo "Resultat: " . $total;
?>