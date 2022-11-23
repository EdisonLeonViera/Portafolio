<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Pagina de Inicio</title>
</head>
<body class="fst-italic">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="<?php echo constant('URL') ?>">
                <img src="public/img/logo.png" alt="" width="44" height="44" class="d-inline-block align-text-top">
                Hospital San Nicolas
            </a>
        </div>
        <div class="collapse navbar-collapse w-50 fs-4" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo constant('URL') ?>/signup">Crear Cuenta</a>
              </li>
            </ul>
        </div>
    </nav>
    <div class="row text-center">
        <?php $this->showMessages();?>
    </div>
    <div class="row text-center">
        <div class="col-5"></div>
    <main class="form-signin col-auto">
        <form action="<?php echo constant('URL'); ?>/login/authenticate" method="POST">
            <img class="mb-1" src="public/img/signin.png" alt="" width="78" height="72">
            <h1 class="h3 mb-3 fw-normal">Inciar Sesion</h1>
            <div class="form-floating">
                <input type="text" name="rut" class="form-control" id="floatingInput" placeholder="12345678-9">
                <label for="floatingInput">R.U.T:</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña:</label>
            </div>
            <input class="w-100 btn btn-lg btn-primary" type="submit" value="Ingresar" >
        </form>
    </main>
        <div class=""></div>
    </div>
    <?php require_once 'views/footer.php'; ?>
</body>
</html>