<?php

    require('conexion.php');
    require('utilities.php');

    $id = $_GET['id'];

    consulta("DELETE FROM notas
    WHERE id='$id' ");

    redireccionar('home.php');
