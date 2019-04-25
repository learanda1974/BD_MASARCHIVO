<?php
include ("lib/constantes.php");
session_unset();

session_destroy();

header("location:".URLBASE);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

