<?php
include ("../clases/Usuario.php");
include ("../lib/constantes.php");
include ("../lib/db.php");

include ("../ValidaAcceso.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$clave=$_POST["clave2"];
if (isset($_SESSION["Usuario"])){
    $oUsr=$_SESSION["Usuario"];
    $oUsr->setClave($clave);
    
    if($oUsr->ActualizaClave()){
        echo "Actualizado";
    }
   
}

