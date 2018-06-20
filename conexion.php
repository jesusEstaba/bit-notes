<?php

    $conexion = mysqli_connect(
        'localhost',
        'root',
        '',
        'bit_notes'
    );

    function consulta($sql) {
        global $conexion;
        
        $ResultadoDeLaConsulta = mysqli_query($conexion, $sql);
        
        if (
            $ResultadoDeLaConsulta === true
            ||
            $ResultadoDeLaConsulta === false
        ) {
            return $ResultadoDeLaConsulta;
        }
        
        $datos = [];
        
        while ($dato = mysqli_fetch_assoc($ResultadoDeLaConsulta)) {
            $datos[] = $dato;
        }
        
        return $datos;
    }
