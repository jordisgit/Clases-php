<?php

require ('Peli.php');

   
    $id=$_GET['id'];
    $t=$_GET['t'];
    $a=$_GET['a'];
    $p=$_GET['p'];
    $v=$_GET['v'];


?>
<form action="modif.php" method='post'>
    <input type="text" name='id' value="<?php echo $id ?>"> <br />
    <input type="text" name='tit' value="<?php echo $t ?>"> <br />
    <input type="text" name='anyo' value="<?php echo $a ?>"> <br />
    <input type="text" name='punt' value="<?php echo $p ?>"> <br />
    <input type="text" name='votos' value="<?php echo $v ?>"> <br />
    <input type="submit" value="modificar"> <br />
</form>