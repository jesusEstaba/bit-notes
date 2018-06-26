<?php
    require('utilities.php');
    

    session_start();

    if ( ! isset( $_SESSION['id'] ) ) {
        redireccionar('index.php');
    }

    $user_name = $_SESSION['name'];
    $user_id = $_SESSION['id'];

    $nota = new Nota($user_id);
    $notas = $nota->todas();

    require('vistas/home.php');
