<?php
    require('modelos/Nota.php');

    $id = $_GET['id'];

    $nota = new Nota();
    $nota->borrar($id);

    require('utilities.php');
    redireccionar('home.php');
