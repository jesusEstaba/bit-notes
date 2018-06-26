<?php
    require('modelos/InicioDeSesion.php');
    
    $inicioDeSesion = new InicioDeSesion();
    $inicioDeSesion->salir();

    require('utilities.php');
    redireccionar('index.php');