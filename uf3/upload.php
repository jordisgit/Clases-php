<?php 
$dir_subida = 'uploads/';
$fichero_subido = $dir_subida . basename($_FILES['myFile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['myFile']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";

?>

