<?php
echo form_open('Pelicula/guardar');

echo form_label('Identificador: ','id');
echo form_input(array('name'=>'id', 'placeholder'=>'id'));
echo '<br />';
echo form_label('Títol: ','titulo');
echo form_input(array('name'=>'titulo', 'placeholder'=>'Titol'));
echo '<br />';
echo form_label('Any: ','anyo');
echo form_input(array('name'=>'anyo', 'placeholder'=>'Any'));
echo '<br />';
echo form_label('Puntuació: ','puntu');
echo form_input(array('name'=>'puntu', 'placeholder'=>'Puntuació'));
echo '<br />';
echo form_label('Vots: ','votos');
echo form_input(array('name'=>'votos', 'placeholder'=>'Vots'));
echo '<br />';
echo form_submit('guardar','Guardar');

echo form_close();
?>