<?php
$any1=2000;
$any2=2050;
$trobat=false;
$actual=$any1;
while ($trobat==false && $actual<=$any2) {
	$fecha=new DateTime($actual. "-01-01");
	if ($fecha->format("w")==3) {
		$trobat=true;
		echo "Trobat a l'any: " . $actual ."<br />";
	}
	$actual++; 
}
?>