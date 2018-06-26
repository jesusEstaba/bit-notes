<?php
    require('modelos/InicioDeSesion.php');
    
    $correo = $_GET['correo'];
    $clave = $_GET['clave'];
    
    $inicioDeSesion = new InicioDeSesion();
    $inicioDeSesion->entrar($correo, $clave);
