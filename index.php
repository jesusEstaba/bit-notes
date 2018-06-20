<?php
    require('utilities.php');

    $message_flash = ver_mensaje_rapido();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIT Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <?php if($message_flash): ?>
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-12">
                    <div class="alert alert-warning" role="alert"><?= $message_flash ?></div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 offset-md-3">
                <form action="login.php">
                    <div class="form-group">
                        <input name="correo" placeholder="Tu Correo" type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input name="clave" placeholder="Tu Contraseña" type="password" class="form-control" />
                    </div>
                    <button class="btn btn-outline-primary btn-lg">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>