<?php
    class Nota {
        private $userId;

        function __construct($userId) {
            $this->$userId = $userId;
        }

        function todas() {
            require('conexion.php');

            return consulta(" SELECT * FROM notas WHERE usuario='$this->userId' ");
        }

        function eliminar($id) {
            require('conexion.php');

            return consulta(" DELETE FROM notas WHERE id='$id' ");
        }
    }