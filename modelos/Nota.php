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

        function crear($nota) {
            require('conexion.php');

            $contenido = $nota['contenido'];
            $prioridad = $nota['prioridad'];

            return consulta(" INSERT INTO notas 
                (contenido,prioridad,usuario) 
                VALUES 
                ('$contenido', '$prioridad', '$this->userId') ");
        }

        function eliminar($id) {
            require('conexion.php');

            return consulta(" DELETE FROM notas WHERE id='$id' ");
        }
    }