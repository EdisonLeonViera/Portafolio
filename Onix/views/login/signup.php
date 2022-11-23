<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body class="fst-italic">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fst-italic">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="<?php echo constant('URL') ?>">
                <img src="public/img/logo.png" alt="" width="44" height="44" class="d-inline-block align-text-top">
                Hospital San Nicolas
            </a>
        </div>
        <div class="collapse navbar-collapse w-50 fs-4" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo constant('URL') ?>">Inciar Sesion</a>
              </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="row">
        <div class="col-4"></div>
        <form action="<?php echo constant('URL') ?>/signup/newUser" onsubmit="return valida();" class="col-4" method="post" name="form2" id="form2" onSubmit="return valida();">
            <div class="row mb-3">
                <h2>Crear Cuenta Paciente</h2>
                <p><?php $this->showMessages();?></p>
                <label for="rut" class="col-sm-4 col-form-label">Ingrese su Rut:</label>
                <input type="text" class="form-control" name="rut" id="rut" placeholder="Ingrese su rut" required/>
            </div>
            <div class="row mb-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" required/>
            </div>
            <div class="row mb-3">
                <label for="apellidoP" class="col-sm-4 col-form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" name="apellidoP" id="apellidoP" placeholder="Ingrese apellido paterno" required/>
            </div>
            <div class="row mb-3">
                <label for="apellidoM" class="col-sm-4 col-form-label">Apellido Materno:</label>
                <input type="text" class="form-control" name="apellidoM" id="apellidoM" placeholder="Ingrese apellido materno" required/>
            </div>
            <div class="row mb-3">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono:</label>
                <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="+56" required/>
            </div>
            <div class="row mb-3">
                <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingresar Correo" required/>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingresar Contraseña" required/>
            </div>
            <div class="row mb-3">
                <label for="fechaNacimiento" class="col-sm-4 col-form-label">Fecha nacimiento:</label>
                <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" required/>
            </div>
            <div class="col-2 m-auto">
                <input type="submit" class="btn btn-primary" value="Crear Cuenta"/>
            </div>
        </form>
        <div class="col-4"></div>
        </div>
    </main>
    <?php require_once 'views/footer.php'; ?>
    <script src="public/js/validacion.js"></script>
</body>
</html>