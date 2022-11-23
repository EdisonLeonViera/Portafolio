<?php
    $user = $this->d['user'];
    $reservas = $this->d['reservas'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Reservas</title>
</head>

<body class="fst-italic">
    <?php require_once  'views/topNav.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <?php require_once  'views/sideNav.php'; ?>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="intervalo">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div id="titulos">
                        <h2 id="titulo">Reservas</h2><p><?php $this->showMessages();?></p>
                    </div>
                </div>
                <div class="marcoDeInfo" id="marcoDeInfo">
                    <div id="info">
                        <div class="container">
                            <div class="row mt-2 mb-2">
                                <div class="col-2">
                                    <h4>Fecha:</h4>
                                </div>
                                <div class="col">
                                    <h4>Doctor:</h4>
                                </div>
                                <div class="col">
                                    <h4>Especialidad:</h4>
                                </div>
                                <div class="col">
                                    <h4>Estado:</h4>
                                </div>
                                <div class="col">
                                    <h4>Opcion:</h4>
                                </div>
                            </div>
                            <?php foreach($reservas as $rs){ ?>
                            <div class="row mt-1" id="reserva1">
                                <div class="col-2">
                                    <?php echo $rs->getFecha(); ?>
                                </div>
                                <div class="col">
                                    Dr(a).<?php echo $rs->getDocNombre() . " " . $rs->getDocApellidoP(); ?>
                                </div>
                                <div class="col">
                                    <?php echo $rs->getEspecialidad(); ?>
                                </div>
                                <div class="col" id="estado">
                                    <?php 
                                        if($rs->getConfirma() == 1){
                                                echo '<div id="stats">Confirmado</div>';                                        
                                        }else{
                                                echo '<div id="stats">Pendiente</div>';    
                                        }
                                    ?>
                                </div>
                                <div class="col">
                                    <?php 
                                        if($rs->getConfirma() == true){
                                            ?>
                                                <a type="button" class="btn btn-primary mb-1 disabled">Cancelar</a>
                                                <a type="button" class="btn btn-primary mb-1 disabled">Confirmar</a>
                                            <?php 
                                        }else{
                                            ?>
                                            <a href="<?php echo constant('URL') ?>/reserva/cancelar/<?php echo $rs->getIdReserva(); ?>" class="btn btn-primary mb-1">Cancelar</a>
                                            <a href="<?php echo constant('URL') ?>/reserva/confirmar/<?php echo $rs->getIdReserva(); ?>" class="btn btn-primary mb-1">Confirmar</a>
                                            <?php
                                        }
                                    ?>
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