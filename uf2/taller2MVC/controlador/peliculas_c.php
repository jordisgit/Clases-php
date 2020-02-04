<?php
//El controlador es el intermediario entre el modelo y la vista
//Las rutas van a ser simpre relativas desde index.php
require_once("./modelo/peliculas_m.php");


$p=new Peliculas_model();
$peliculas=$p->getPelis();
require_once("./vista/peliculas_v.php");
?>