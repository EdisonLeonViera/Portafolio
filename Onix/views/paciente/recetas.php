<?php
    $user = $this->d['user'];
    $rc = $this->d['rc'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cuentas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Recetas</title>
</head>

<body class="fst-italic" >
    <?php require_once 'views/topNav.php' ;?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <?php require_once 'views/sideNav.php' ;?>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="intervalo">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div id="titulos">
                        <h1 class="h2" id="titulo">Recetas</h1><p><?php $this->showMessages();?></p>
                    </div>
                </div>
                <div class="marcoDeInfo" id="marcoDeInfo">
                    <div id="info">
                        <div class="container" id="idReceta">
                            <div class="row mt-2 mb-2">
                                <div class="col">
                                    <h4>Fecha:</h4>
                                </div>
                                <div class="col">
                                    <h4>Doctor:</h4>
                                </div>
                                <div class="col">
                                    <h4>Especialidad:</h4>
                                </div>
                                <div class="col">
                                    <h4>Caducidad:</h4>
                                </div>
                                <div class="col">
                                    <h4>Receta:</h4>
                                </div>
                            </div>
                            <?php foreach($rc as $r){ ?>
                            <div class="row mt-1">
                                <div class="col">
                                    <?php echo $r->getFechaEmision();?>
                                </div>
                                <div class="col">
                                    Dr(a).<?php echo $r->getDocNombre() . " " . $r->getDocApellidoP();?>
                                </div>
                                <div class="col">
                                    <?php echo $r->getEspecialidad();?>
                                </div>
                                <div class="col">
                                    <?php echo $r->getFechaCaducidad(); ?>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample<?php echo $r->getIdRec(); ?>" aria-expanded="false"
                                        aria-controls="collapseExample<?php echo $r->getIdRec(); ?>">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col m-1">
                                    <div class="collapse" id="collapseExample<?php echo $r->getIdRec(); ?>">
                                        <div class="card card-body">
                                        <?php ?>
                                            <?php
                                                $direccion = 'public/img/recetas/recetaQR' . $r->getIdRec() . '.png';
                                                error_log('CodigoQR::direccion-> idRec ' . $direccion);
                                                if(file_exists($direccion)){
                                                    ?>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>
                                                                Fecha de Emision: <?php echo $r->getFechaEmision(); ?><br>
                                                                Doctor(a): <?php echo $r->getDocNombre(); ?><br>
                                                                Especialidad: <?php echo $r->getEspecialidad(); ?><br>
                                                                Receta: <?php echo $r->getDescripcion(); ?><br>
                                                                Fecha de Caducidad: <?php echo $r->getFechaCaducidad(); ?>
                                                            </p>
                                                        </div>
                                                        <div class="col">
                                                            <img src="<?php echo constant('URL') ?>/public/img/recetas/recetaQR<?php echo $r->getIdRec() ?>.png" width="130" height="130" class="d-inline-block align-text-top">
                                                        </div>
                                                    </div>
                                                    <?php
                                                }else{
                                                    ?>
                                                        <div class="row">
                                                            <p>
                                                                Fecha de Emision: <?php echo $r->getFechaEmision(); ?><br>
                                                                Doctor(a): <?php echo $r->getDocNombre(); ?><br>
                                                                Especialidad: <?php echo $r->getEspecialidad(); ?><br>
                                                                Receta: <?php echo $r->getDescripcion(); ?><br>
                                                                Fecha de Caducidad: <?php echo $r->getFechaCaducidad(); ?>
                                                            </p>
                                                            <form action="<?php echo constant('URL') ?>/recetas/generarQR" method="POST">              
                                                                <input type="text" name="idRec" id="idRec" value="<?php echo $r->getIdRec(); ?>" hidden>
                                                                <input type="text" name="fechaEmison" id="fechaEmison" value="<?php echo $r->getFechaEmision(); ?>" hidden>
                                                                <input type="text" name="docNombre" id="docNombre" value="<?php echo $r->getDocNombre(); ?>" hidden>
                                                                <input type="text" name="docApellidoP" id="docApellidoP" value="<?php echo $r->getDocApellidoP(); ?>" hidden>
                                                                <input type="text" name="especialidad" id="especialidad" value="<?php echo $r->getEspecialidad(); ?>" hidden>
                                                                <input type="text" name="descripcion" id="descripcion" value="<?php echo $r->getDescripcion(); ?>" hidden>
                                                                <input type="text" name="fechaCaducidad" id="fechaCaducidad" value="<?php echo $r->getFechaCaducidad(); ?>" hidden>                                       
                                                                <div>
                                                                    <button class="btn btn-primary" type="submit">Crear Qr</button>
                                                                </div>
                                                            </form>
                                                        </div> 
                                                    <?php
                                                }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </main>
    </div>
    </div>
    <?php require_once 'views/footer.php'; ?>
    <script src="js/codigoqr.js"></script>
    <script src="js/animacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>