<?php
    require('controladores/ControladorDeInicioDeSesion.php');
    
    $controlador = new ControladorDeInicioDeSesion();
    $controlador->cerrar();
