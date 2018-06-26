<?php
    class ControladorDeInicioDeSesion {
        function iniciar($correo, $clave) {
            require('modelos/InicioDeSesion.php');
            
            $inicioDeSesion = new InicioDeSesion();
            $inicioDeSesion->entrar($correo, $clave);
        }

        function cerrar() {
            require('modelos/InicioDeSesion.php');
    
            $inicioDeSesion = new InicioDeSesion();
            $inicioDeSesion->salir();

            require('utilities.php');
            redireccionar('index.php');
        }
    }