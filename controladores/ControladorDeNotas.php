<?php
    class ControladorDeNotas {
        function incio() {
            require('utilidades/Sesion.php');
    
            $sesion = new Sesion();
            
            $user_id = $sesion->ObtenerId();
            $user_name = $sesion->obtenerNombre();
            
            require('modelos/Nota.php');
            $nota = new Nota($user_id);
            $notas = $nota->todas();

            require('vistas/home.php');
        }

        function borrar($id) {
            require('modelos/Nota.php');

            $nota = new Nota();
            $nota->borrar($id);

            require('utilities.php');
            redireccionar('home.php');
        }
    }