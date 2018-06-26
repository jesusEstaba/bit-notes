<?php
    $id = $_GET['id'];

    require('controladores/ControladorDeNotas.php');
    
    $controlador = new ControladorDeNotas();
    $controlador->borrar($id);
