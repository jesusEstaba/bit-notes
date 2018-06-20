<?php
    require('conexion.php');
    require('utilities.php');

    $email = $_GET['correo'];
    $password = $_GET['clave'];

    $users = consulta("SELECT * FROM usuarios WHERE correo='$email'");

    if (count($users)) {
        if ($users[0]['clave'] == $password) {
            session_start();
            
            $_SESSION['id'] = $users[0]['id'];
            $_SESSION['password'] = $users[0]['clave'];
            $_SESSION['name'] = $users[0]['nombre'];

            redireccionar('home.php');
        } else {
            crear_mensaje_rapido('Contraseña Errornea');
            redireccionar('index.php');
        }
    } else {
        crear_mensaje_rapido('El Usuario NO Existe');
        redireccionar('index.php');
    }