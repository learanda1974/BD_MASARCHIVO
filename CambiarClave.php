<?php
include("lib/constantes.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="<?=URLBASE?>controladores/AccUsuarioCambiarClave.php">
            <input type="password" name="clave0">
            <input type="password" name="clave1">
            <input type="password" name="clave2">
            <input type="submit" name="enviar" value="Acceder">
        </form>
    </body>
</html>
