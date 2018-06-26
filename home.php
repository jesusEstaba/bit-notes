<?php
    require('utilidades/Sesion.php');
    
    $sesion = new Sesion();
    
    $user_id = $sesion->ObtenerId();
    $user_name = $sesion->obtenerNombre();
    
    $nota = new Nota($user_id);
    $notas = $nota->todas();

    require('vistas/home.php');
