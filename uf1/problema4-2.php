<?php
$empleados = array(
 array('Powell, Alfredo','Administrativo',5500),
 array('Pérez, Verónica','Administrativo',5200),
 array('Goldstein, Juan','Recursos Humanos',6800),
 array('Giaccomo, Walter','Recursos Humanos',6200),
 array('Armani, Luis','Compras',10500),
 array('Sarlanga, Horacio','Administrativo',5500),
 array('Juárez, Alicia','Compras',7500),
 array('Toselli, Agustina','Mantenimiento',5800),
 array('Gómez, Valeria','Sistemas',4700),
 array('Valverde, Emiliano','Recursos Humanos',5800),
 array('Domínguez, Carlos','Mantenimiento',4900),
 array('Carranza, Saúl','Administrativo',9500),
);


/*
Obtenir i mostrar el nom de l'empleat que guanya més diners.
? Calcular el sou mitjana de tots els empleats i mostrar-ho per pantalla.
? Mostrar quants empleats administratius hi ha (usar strcmp)
? Eliminar als empleats assignats a Manteniment (usar strcmp)
*/

$max=0;
$act=-1;

array_walk($empleados,
			function($valor,$clave){
				global $max, $act;
				if ($valor[2]>$max){
					$max=$valor[2];
					$act=$clave;
				}
			}
);

echo $max . " en la posicion: " . $act . "<br />";
$total=0;
foreach ($empleados as $act) {
	$total=$total+$act[2];
}
echo "mitjana: ". ($total / count($empleados)) . "<br />";

$admin = array_filter($empleados, function($valor){
return $valor[1]=='Administrativo';
});
print_r($admin);