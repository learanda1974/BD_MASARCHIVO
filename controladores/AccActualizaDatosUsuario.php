<?php
include ("../lib/constantes.php");
// put your code here

echo DIRBASE;
echo '<br>';
$sArchivo=DIRBASE."/img/usuario".$_FILES["imgusuario"]["name"];
move_uploaded_file($_FILES["imgusuario"]["tmp_name"], $sArchivo);
        
var_dump($_FILES);
