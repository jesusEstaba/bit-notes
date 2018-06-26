<?php
    $correo = $_GET['correo'];
    $clave = $_GET['clave'];

    require('controladores/ControladorDeInicioDeSesion.php');
    
    $controlador = new ControladorDeInicioDeSesion();
    $controlador->iniciar($correo, $clave);
    