<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DBConnect{
    function conexion(){
        try{
        $dblink = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSR);
        $dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dblink->exec("set names utf8");
        return $dblink;
    }
     catch (Exception $e){
         echo 'Error en la conexión: ',  $e->getMessage(), "\n";
         return null;
     }
    }
}