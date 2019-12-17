<?php
$hora_act="21:30";
$fecha=new DateTime('2019-12-31 '.$hora_act);
$fecha2=new DateTime('2020-01-01 00:00:00');
$dif=$fecha2->diff($fecha);


$horas = $dif->h;
$minutos = $dif->i;
var_dump($dif);
$total=$horas*60 + $minutos;
echo ($total);
?>