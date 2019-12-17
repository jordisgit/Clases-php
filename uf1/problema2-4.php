<?php
$text="barcar";
$text2="ar";
$contador=0;
$i=0;
$j=0;
$inside=false;
$total=false;
while ($i<=strlen($text)){
	echo "comparant: ". substr($text,$i,1). " i " .substr($text2,$j,1) ."<br />";
	if  ($inside==true) {
		$j++;
		if ($j<strlen($text2)) {
			if (substr($text,$i,1)==substr($text2,$j,1)) {
				
			}
			else {
				$total=false;
				$inside=false;
			}
		}
		else {
			$j=0;
			$inside=false;
			if ($total==true) {
				$contador++;
				$total=false;
				echo "Trobat a posició " . $i . "<br />";
			}
		}
	}
	else {
		$j=0;
		if (substr($text,$i,1)==substr($text2,$j,1)) {
			$inside=true;
			$total=true;
		}
	}	
	$i++;
}
echo "Nombre de vegades: " . $contador;
?>