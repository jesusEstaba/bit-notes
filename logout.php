<?php
    require('utilities.php');

    session_start();
    session_destroy();
    
    redireccionar('index.php');