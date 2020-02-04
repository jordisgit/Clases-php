<?php

require ('Peli.php');

$x=(int) $_POST['id'];
$p= new Peli($x);
echo $p->getTitulo() . "<br />";
echo $p->getAnyo();
?>