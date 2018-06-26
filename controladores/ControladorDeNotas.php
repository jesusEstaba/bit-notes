<?php
    class ControladorDeNotas {
        private $nota;
        private $nombreDeUsuario;

        function __construct() {
            require('utilidades/Sesion.php');
    
            $sesion = new Sesion();            
            $userId = $sesion->ObtenerId();
            $this->nombreDeUsuario = $sesion->ObtenerNombre();
            
            require('modelos/Nota.php');

            $this->nota = new Nota($userId);
        }

        function incio() {
            $notas = $this->nota->todas();
            $user_name = $this->nombreDeUsuario;

            require('vistas/home.php');
        }

        function agregar($notaInput) {
            $this->nota->crear($notaInput);
            
            require('utilities.php');
            redireccionar('home.php');
        }

        function borrar($id) {
            $this->nota->eliminar($id);

            require('utilities.php');
            redireccionar('home.php');
        }
    }