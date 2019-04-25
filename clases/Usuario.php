<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario{
    private $nomusuario;
    private $nombre;
    private $clave;
    private $id;
    
   
        function __construct($nomusuario, $nombre, $clave) {
        $this->nomusuario = $nomusuario;
        $this->nombre = $nombre;
        $this->clave = md5($clave);
    }

    function getNomusuario() {
        return $this->nomusuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getClave() {
        return $this->clave;
    }
     function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }


    function setNomusuario($nomusuario) {
        $this->nomusuario = $nomusuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setClave($clave) {
        $this->clave = md5($clave);
    }

    function Valida(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('select idusuario,nombre
                                 from usuario
                                 where nomusu=? and clave=?');
        
        $PDOst->execute(array($this->nomusuario,$this->clave));

        if ( $row=$PDOst->fetch(PDO::FETCH_OBJ)){
            $this->nombre=$row->nombre;
            $this->id=$row->idusuario;
            return true;
        }
        else{
             return false;   
        }
        
    }
    
    function ActualizaClave(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('update usuario
                                 set clave=?
                                 where idusuario=?');
        echo $this->id;
        $PDOst->execute(array($this->clave,$this->id));

      /*  if ( $row=$PDOst->fetch(PDO::FETCH_OBJ)){
            return true;
        }
        else{
             return false;   
        }
        */
    }
}