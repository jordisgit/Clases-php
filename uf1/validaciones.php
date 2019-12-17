<?php
function valida_email($x) {

	$correcto = true;

	$arroba=strpos($x,'@');
	if ($arroba===false) {
		$correcto=false;
	}
	else {
		$punto=strpos($x,'.',$arroba);
		if($punto===false){
			$correcto=false
		}
		else{
		//Tenemos una @ i un . despues
			$aux=substr($x,0,$arroba);
			$letra1=false;
			for ($i=0;$i<strlen($aux);$i++){
				$actual=substr($aux,$i,1);
				if (ord($actual)>=97 && ord($actual)<=122){
					$letra1=true;
				}
			}
		}
	}

	return true;
}


?>