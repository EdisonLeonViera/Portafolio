<?php
    $user = $this->d['user'];
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
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div id="titulos">
                        <h1 class="h2" id="titulo">Reservar</h1><p><?php $this->showMessages();?></p>
                    </div>
                </div>
                <div class="marcoDeInfo" id="marcoDeInfo">
                    <div id="info">
                        <div class="container">
                            <div class="row mt-1" id="Toma">
                                <div class="col text-center">
                                    <h4>Consulta Medica</h4>
                                    <a href="<?php echo constant('URL'); ?>/reservar/consulta" class="btn btn-primary mb-1">Reservar</a>
                                </div>
                                <div class="col text-center">
                                    <h4>Examen</h4>
                                    <a href="<?php echo constant('URL'); ?>/reservar/examen" class="btn btn-primary mb-1">Reservar</a>
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
