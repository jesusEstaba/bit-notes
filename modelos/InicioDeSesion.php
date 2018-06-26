<?php
    class InicioDeSesion {
        function entrar($correo, $clave) {
            require('utilities.php');
            require('conexion.php');
            $users = consulta(" SELECT * FROM usuarios WHERE correo='$correo' ");
            
            if (count($users)) {
                if ($users[0]['clave'] == $clave) {
                    require('utilidades/Sesion.php');
                    
                    $sesion = new Sesion(true);
                    $sesion->agregar('id', $users[0]['id']);
                    $sesion->agregar('nombre', $users[0]['nombre']);

                    redireccionar('home.php');
                } else {
                    crear_mensaje_rapido('Contraseña Errornea');
                    redireccionar('index.php');
                }
            } else {
                crear_mensaje_rapido('El Usuario NO Existe');
                redireccionar('index.php');
            }
        }

        function salir() {
            require('utilidades/Sesion.php');

            $sesion = new Sesion();
            $sesion->cerrar();
        }
    }