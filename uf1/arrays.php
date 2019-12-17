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
 array('Gómez, Valeria','Mantenimiento',4700),
 array('Valverde, Emiliano','Recursos Humanos',5800),
 array('Domínguez, Carlos','Mantenimiento',4900),
 array('Carranza, Saúl','Administrativo',9500),
);

// Nom i sou del sou major
$max=0;
$emp=-1;
foreach ($empleados as $actual){
	if ($actual[2]>$max){
		$max=$actual[2];
		$emp=$actual;
	}
}
echo "Nombre: $emp[0] <br /> Sueldo: $emp[2]<br />";

$maximo=0;
$bueno=-1;
array_walk($empleados,
		function($actual, $clave){
			global $maximo, $bueno;
			if ($actual[2]>$maximo){
				$bueno=$actual;
				$maximo=$actual[2];
			}
		}
);

echo "Nombre: $bueno[0] <br /> Sueldo: $bueno[2]<br />";

// Calcular sou mitjà


// Quants empleats administratius hi ha
$resultado= array_filter($empleados,
			function($valor) {
				return (strcmp($valor[1],'Administrativo')==0);
			}
);
echo "Hay " . count($resultado) . " administrativos";

//Eliminar a los de mantenimiento;
for ($i=count($empleados)-1;$i>=0;$i--) {
	if ($empleados[$i][1]=='Mantenimiento') {
		array_splice($empleados, $i, 1);
	}
}

print_r($empleados);





?>











