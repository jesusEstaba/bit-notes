<?php
    require('utilities.php');

    session_start();

    if ( !isset($_SESSION['id']) ) {
        redireccionar('index.php');
    }

    $user_name = $_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIT Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        .badge {
            font-size: 1em;
            float: left;
        }
    </style>
</head>
<body class="bg-light">


    <div class="container">
        <div class="row p-2">
            <div class="col-md-6">
                <img src="images/profile.jpg" width="100" alt="Foto de perfil" class="rounded-circle">                    <a href="logout.php"><?= $user_name ?></a>
            </div>
            <div class="col-md-6">
                <h2 class="text-right">( # )</h2>
             </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="nota" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="prioridad" class="form-control">
                                <option value="">Baja</option>
                                <option value="">Media</option>
                                <option value="">Alta</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-1">
                    <div class="card-header text-right">
                        <span class="badge badge-success">Baja</span>
                        <a href="#" class="btn btn-outline-danger btn-sm">X</a>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build 
                            on the card title and make up the 
                            bulk of the card's content.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header text-right">
                    <span class="badge badge-danger">Alta</span>
                        <a href="#" class="btn btn-outline-danger btn-sm">X</a>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build 
                            on the card title and make up the 
                            bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>