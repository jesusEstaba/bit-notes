<?php
    $nota = $_GET['nota'];
    $prioridad = $_GET['prioridad'];

    require('controladores/ControladorDeNotas.php');
    
    $controlador = new ControladorDeNotas();
    $controlador->agregar([
        'contenido' => $nota,
        'prioridad' => $prioridad,
    ]);
