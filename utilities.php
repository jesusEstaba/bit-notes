<?php
    
    function redireccionar($archivo) {
        header('Location: ' . $archivo);
    }

    function ver_mensaje_rapido() {
        session_start();
        
        if ( !isset($_SESSION['message_flash']) ) {
            return '';
        }

        $mensaje = $_SESSION['message_flash'];

        unset($_SESSION['message_flash']);
        
        return $mensaje;
    }

    function crear_mensaje_rapido($mensaje) {
        session_start();
        $_SESSION['message_flash'] = $mensaje;
    }
