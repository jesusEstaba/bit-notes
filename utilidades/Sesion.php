<?php

    class Sesion {
        private $id;
        private $nombre;

        function __construct($isLogin = false) {
            if ($isLogin) {
                return;
            }

            session_start();

            if ( ! isset( $_SESSION['id'] ) ) {
                require('utilities.php');
                redireccionar('index.php');
            }

            $this->id = $_SESSION['id'];
            $this->nombre = $_SESSION['nombre'];
        }

        function agregar($nombre, $valor) {
            session_start();
            $_SESSION[$nombre] = $valor;
        }

        function obtenerId() {
            return $this->id;
        }

        function obtenerNombre() {
            return $this->nombre;
        }
    }