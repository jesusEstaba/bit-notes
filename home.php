<?php
    require('utilities.php');
    require('conexion.php');

    session_start();

    if ( ! isset( $_SESSION['id'] ) ) {
        redireccionar('index.php');
    }

    $user_name = $_SESSION['name'];
    $user_id = $_SESSION['id'];

    $notas = consulta("SELECT * FROM notas
    WHERE usuario='$user_id' ");

    require('vistas/home.php');
