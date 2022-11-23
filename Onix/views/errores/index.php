<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Page Not Found</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fst-italic">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="<?php echo constant('URL') ?>">
                <img src="public/img/logo.png" alt="" width="44" height="44" class="d-inline-block align-text-top">
                Hospital San Nicolas
            </a>
        </div>>
    </nav>
    <div class="error-container">
        <div class="error-info text-center">
        <h1 class="error404">404</h1> 
        <p>
            La página que estás buscando no existe. <br />
            <a href="<?php echo constant('URL') ?>">Regresar a la página de inicio</a>
        </p>   
        </div>
        
    </div>
    <?php require_once 'views/footer.php'; ?>
</body>
</html>