<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$var_getMenu = isset($_GET['Menu']) ? $_GET['Menu'] :'Inicio';

switch ($GET['Menu']){
    
    case "Login":
        require_once ('./Views/Login.php');
        break;
    case "AcercadeNosotros":
        require_once ('./Views/Acercade.php');
        break;
    default :
        require_once ('./Views/index.php');
}
?>


